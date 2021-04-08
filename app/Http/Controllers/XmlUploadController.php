<?php

namespace App\Http\Controllers;

use App\Models\INN_kontragent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Kontragent;
use App\Models\OstatkiOtchetKontragent;
use App\Models\PlategVipiskaAll;

class XmlUploadController extends Controller
{
    // ToDo: Вынести функции получения в хэлпер

    public function uploadfile(Request $request)
    {
        // 2мб в данном случае условное значение, в дальнейшем оно изменится
        $request->validate([
            'file' => 'required|mimes:txt|max:2048'
        ]);

        if (!$request->file()) {
            return back()->withErrors(["msg", "Файл неверного формата или больше 2мб"]);
        }
        $fileName = time() . '_' . $request->file->getClientOriginalName();
        $fileName = iconv("UTF-8", 'windows-1251', $fileName);
        $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
        $parsedData = $this->parseXmlFile($filePath);
        return back()->with("message", $parsedData);
    }

    private function parseXmlFile($filePath)
    {
        $file = Storage::disk('public')->get($filePath);
        $fileName = explode("/", $filePath)[1];
        $filestring = mb_convert_encoding($file,  "utf-8", "windows-1251");
        $header = $this->getDocumentHeader($filestring);
        $body = $this->getDocumentBody($filestring);
        $raschet = $this->getDocumentRaschet($filestring);
        $date = date('Y-m-d h:i:s');
        $this->uploadDocumentDataToDB($header, $body, $raschet, $fileName, $date);
    }

    /*
        Функция разбивает данные текстового файла на ассоциативный массив
    */
    private function parseAssocData($record)
    {
        // Preg_split испольузется тут для разделения записей по лайнбрейкам
        // Сделано для того, чтобы не было разницы на линуксе и винде
        $records = preg_split("/\r\n|\r|\n/", $record);
        $result = [];
        foreach ($records as $line) {
            $line_data = explode("=", $line);
            if (count($line_data) == 1) {
                continue;
            }
            // Придется заниматься вот таким извращением, переводя элементы массива с индексами русского языка
            // Более вменяемого подхода с предсказуемыми данными я не нашел
            $result[$line_data[0]] = $line_data[1];
        }
        return $result;
    }
    /*
        Функция получает мета данные документа, так же называемые шапкой
    */
    private function getDocumentHeader($filestring)
    {
        $header = [];
        // Регекс получает все данные до первой секции РасчСчета
        // Данный код подразумевает наличие хотя бы одной секции РасчСчета
        preg_match_all("/(^.*)СекцияРасчСчет/s", $filestring, $header);
        $header = $this->parseAssocData($header[1][0]);
        return $header;
    }

    /*
        Функция получает все секции документа
    */
    private function getDocumentBody($filestring)
    {
        // Регулярное выражение работает по принципу
        // Найти старт Секции Документ
        // Взять всё после неё
        // Брать всё до тех пор пока не будет найден КонецДокумента
        // Параметры отвечают за поиск включая энтеры и лайнбрейки
        $data = [];
        preg_match_all("/СекцияДокумент=.*?КонецДокумента/s", $filestring, $data);
        $body = [];
        foreach ($data[0] as $part) {
            $body[] = $this->parseAssocData($part);
        }
        return $body;
    }

    /*
        Функция получает мета данные документа, так же называемые шапкой
    */
    private function getDocumentRaschet($filestring)
    {
        $data = [];
        $raschet = [];
        // Регекс получает все данные до первой секции РасчСчета
        // Данный код подразумевает наличие хотя бы одной секции РасчСчета
        preg_match_all("/СекцияРасчСчет.*?КонецРасчСчет/s", $filestring, $data);
        foreach ($data[0] as $ras) {
            $raschet[] = $this->parseAssocData($ras);
        }
        return $raschet;
    }

    private function uploadDocumentDataToDB($header, $body, $raschet, $fileName, $date)
    {
        // Загружено секций документа
        $uploaded = 0;
        // Структура файла не позволяет сделать иначе, работаем с блоками одинакого кода но разным функционалом
        // Есть возможность передавать истанции класса в функции и делать с этим что-то
        // Но это может привести к дальнейшим проблемам с отладкой, поэтому делается так
        foreach ($body as $elem) {
            if ($header["ВерсияФормата"] == "1.01") {
                $senderIndex = "Плательщик";
                $recieverIndex = "Получатель";
            } else {
                $senderIndex = "Плательщик1";
                $recieverIndex = "Получатель1";
            }
            $kontragent = Kontragent::where("name_kontragent", "=", $elem[$senderIndex])->first();
            if ($kontragent === null) {
                $kontragent = new Kontragent;
                $kontragent->name_kontragent = $elem[$senderIndex];
                $kontragent->save();
            }
            $schet = $kontragent->INNs->where("inn_kontragent", "=", $elem["ПлательщикИНН"])->first();
            if ($schet === null) {
                $schet = new INN_kontragent;
                $schet->inn_kontragent = $elem["ПлательщикИНН"];
                $kontragent->INNs()->save($schet);
            }
            $kontragent = Kontragent::where("name_kontragent", "=", $elem[$recieverIndex])->first();
            if ($kontragent === null) {
                $kontragent = new Kontragent;
                $kontragent->name_kontragent = $elem[$recieverIndex];
                $kontragent->save();
            }
            $schet = $kontragent->INNs->where("inn_kontragent", "=", $elem["ПолучательИНН"])->first();
            if ($schet === null) {
                $schet = new INN_kontragent;
                $schet->inn_kontragent = $elem["ПолучательИНН"];
                $kontragent->INNs()->save($schet);
            }

            $compareDate = explode(".", $elem["Дата"]);
            $compareDate = "{$compareDate[2]}-{$compareDate[1]}-{$compareDate[0]}";

            $plateg_vipska = PlategVipiskaAll::where("Nomer", "=", $elem["Номер"])
                ->whereDate("Data", "=", $compareDate)
                ->where("Summa", "=", $elem["Сумма"])
                ->where("PlatelshchickINN", "=", $elem["ПлательщикИНН"])
                ->where("PlatelshchickRasChshet", "=", $elem["ПлательщикРасчСчет"])
                ->where("PoluchatelINN", "=", $elem["ПолучательИНН"])
                ->where("PoluchatelRasChshet", "=", $elem["ПолучательРасчСчет"])
                ->where("VidOplaty", "=", $elem["ВидОплаты"])
                ->first();
            if ($plateg_vipska === null) {
                // Следующему программисту, прости
                // А вообще вини предыдущего, за такую таблицу
                // А если уж совсем крайних искать, вини 1С с их отличным форматом
                $plateg_vipska = new PlategVipiskaAll;
                $plateg_vipska->UnikalnyjMD5platezha = md5(uniqid(rand(), true));
                $plateg_vipska->SektsiyaDocumenta = $elem["СекцияДокумент"] ?? NULL;
                $plateg_vipska->Nomer = $elem["Номер"] ?? NULL;
                $new_date = explode(".", $elem["Дата"] ?? NULL);
                $new_date = "{$new_date[2]}-{$new_date[1]}-{$new_date[0]}";
                $plateg_vipska->Data = $new_date ?? NULL;
                $plateg_vipska->Summa = $elem["Сумма"] ?? NULL;
                $plateg_vipska->PlatelshikSchet = $elem["ПлательщикСчет"] ?? NULL;
                $new_date = explode(".", $elem["ДатаСписано"] ?? NULL);
                if (count($new_date) > 1) {
                    $new_date = "{$new_date[2]}-{$new_date[1]}-{$new_date[0]}";
                } else {
                    $new_date = NULL;
                }
                $elem["ДатаСписано"] = empty($elem["ДатаСписано"]) ? NULL : $elem["ДатаСписано"];
                $plateg_vipska->DataSpisano =  $new_date ?? NULL;
                $plateg_vipska->Platelshchick = $elem["Плательщик"] ?? NULL;
                $plateg_vipska->Platelshchick1 = $elem["Плательщик"] ?? NULL;
                $plateg_vipska->PlatelshchickINN = $elem["ПлательщикИНН"] ?? NULL;
                $plateg_vipska->PlatelshchickKPP = $elem["ПлательщикКПП"] ?? NULL;
                $plateg_vipska->PlatelshchickRasChshet = $elem["ПлательщикРасчСчет"] ?? NULL;
                $plateg_vipska->PlatelshchickBank1 = $elem["ПлательщикБанк1"] ?? NULL;
                $plateg_vipska->PlatelshchickBIK = $elem["ПлательщикБИК"] ?? NULL;
                $plateg_vipska->PlatelshchickKorschet = $elem["ПлательщикКорсчет"] ?? NULL;
                $plateg_vipska->PoluchatelSchet = $elem["ПолучательСчет"] ?? NULL;
                $new_date = explode(".", $elem["ДатаПоступило"] ?? NULL);
                if (count($new_date) > 1) {
                    $new_date = "{$new_date[2]}-{$new_date[1]}-{$new_date[0]}";
                } else {
                    $new_date = NULL;
                }
                $elem["ДатаПоступило"] = empty($new_date) ? NULL : $elem["ДатаПоступило"];
                $plateg_vipska->DataPostupilo = $elem["ДатаПоступило"] ?? NULL;
                $plateg_vipska->Poluchatel = $elem["Получатель"] ?? NULL;
                $plateg_vipska->Poluchatel1 = $elem["Получатель1"] ?? NULL;
                $plateg_vipska->PoluchatelINN = $elem["ПолучательИНН"] ?? NULL;
                $plateg_vipska->PoluchatelKPP = $elem["ПолучательКПП"] ?? NULL;
                $plateg_vipska->PoluchatelRasChshet = $elem["ПолучательРасчСчет"] ?? NULL;
                $plateg_vipska->PoluchatelBank1 = $elem["ПолучательБанк1"] ?? NULL;
                $plateg_vipska->PoluchatelBIK = $elem["ПолучательБИК"] ?? NULL;
                $plateg_vipska->PoluchatelKorschet = $elem["ПолучательКорсчет"] ?? NULL;
                $plateg_vipska->VidPlatezha = $elem["ВидПлатежа"] ?? NULL;
                $plateg_vipska->VidOplaty = $elem["ВидОплаты"] ?? NULL;
                $plateg_vipska->SrokAksepta = $elem["СрокАксепта"] ?? NULL;
                $plateg_vipska->UslovieOplaty1 = $elem["УсловиеОплаты1"] ?? NULL;
                $plateg_vipska->StatusSostavitelya = $elem["СтатусСоставителя"] ?? NULL;
                $plateg_vipska->PokazatelKBK = $elem["ПоказательКБК"] ?? NULL;
                $plateg_vipska->OKATO = $elem["ОКАТО"] ?? NULL;
                $plateg_vipska->PokazatelOsnovaniya = $elem["ПоказательОснования"] ?? NULL;
                $plateg_vipska->PokazatelPerioda = $elem["ПоказательПериода"] ?? NULL;
                $plateg_vipska->PokazatelNomera = $elem["ПоказательНомера"] ?? NULL;
                $plateg_vipska->PokazatelDaty = $elem["ПоказательДаты"] ?? NULL;
                $plateg_vipska->Ocherednost = $elem["Очередность"] ?? NULL;
                $plateg_vipska->NaznacheniePlatezha = $elem["НазначениеПлатежа"] ?? NULL;
                $plateg_vipska->VidAkkreditiva = $elem["ВидАккредитива"] ?? NULL;
                $plateg_vipska->NomerSchetaPostavshchika = $elem["НомерСчетаПоставщика"] ?? NULL;
                $plateg_vipska->PlateZHPOPredst = $elem["ПлатежПосредств"] ?? NULL;
                $plateg_vipska->DopolNUsloviya = $elem["ДополУсловия"] ?? NULL;
                $plateg_vipska->DataOtsylkiDok = $elem["ДатаОтсылкиДок"] ?? NULL;
                $plateg_vipska->KodNazPlatezha = $elem["КодНазПлатежа"] ?? NULL;
                $plateg_vipska->Kod = $elem["Код"] ?? NULL;
                $plateg_vipska->KodDebitora = $elem["КодДебитора"] ?? NULL;
                $plateg_vipska->PokazatelTipa = $elem["ПоказательТипа"] ?? NULL;
                $plateg_vipska->NazvanieFajla = $fileName;
                $plateg_vipska->save();
                $uploaded++;
            }
        }
        $raschet = $raschet[0];
        $ostatkiSchet = new OstatkiOtchetKontragent;
        $ostatkiSchet->RasChschet = $raschet["РасчСчет"] ?? NULL;
        $new_date = explode(".", $raschet["ДатаСозданияВыписка"] ?? NULL);
        if (count($new_date) > 1) {
            $new_date = "{$new_date[2]}-{$new_date[1]}-{$new_date[0]}";
        } else {
            $new_date = NULL;
        }
        $ostatkiSchet->DataSozdaniya_vipiska = $new_date ?? NULL;
        $ostatkiSchet->Vremyasozdaniya = $raschet["ВремяСоздания"] ?? NULL;
        $new_date = explode(".", $raschet["ДатаНачала"] ?? NULL);
        if (count($new_date) > 1) {
            $new_date = "{$new_date[2]}-{$new_date[1]}-{$new_date[0]}";
        } else {
            $new_date = NULL;
        }
        $ostatkiSchet->DataNachala = $new_date ?? NULL;
        $new_date = explode(".", $raschet["ДатаКонца"] ?? NULL);
        if (count($new_date) > 1) {
            $new_date = "{$new_date[2]}-{$new_date[1]}-{$new_date[0]}";
        } else {
            $new_date = NULL;
        }
        $ostatkiSchet->DataKontsa = $raschet["ДатаКонца"] ?? NULL;
        $ostatkiSchet->NachalnyOstatok = $raschet["НачальныйОстаток"] ?? NULL;
        $ostatkiSchet->VsegoPostupilo = $raschet["ВсегоПоступило"] ?? NULL;
        $ostatkiSchet->VsegoSpisano = $raschet["ВсегоСписано"] ?? NULL;
        $ostatkiSchet->KonechniyOstatok = $raschet["КонечныйОстаток"] ?? NULL;
        $ostatkiSchet->VersiyaFormata = $header["ВерсияФормата"] ?? NULL;
        $ostatkiSchet->VsegoSektsijVDokumente = count($body);
        $ostatkiSchet->ZagruzhenoSektsij = $uploaded;
        $ostatkiSchet->NazvanieFajla = $fileName ?? NULL;
        $ostatkiSchet->DataObrabotkiFajla = $date ?? NULL;
        $ostatkiSchet->save();
    }
}
