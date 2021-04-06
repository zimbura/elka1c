<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $filestring = mb_convert_encoding($file,  "utf-8", "windows-1251");
        $header = $this->getDocumentHeader($filestring);
        $body = $this->getDocumentBody($filestring);
        $raschet = $this->getDocumentRaschet($filestring);

        
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
}
