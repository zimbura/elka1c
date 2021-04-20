<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlategVipiskaAllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // ToDo: Reoranize this monstrosity into normal one to one tables
        Schema::create('plateg_vipiska_all', function (Blueprint $table) {
            $table->id();
            $table->string("UnikalnyjMD5platezha", 100);
            $table->string("SektsiyaDocumenta", 100)->nullable();
            $table->string("Nomer", 100)->nullable();
            $table->date("Data")->nullable();
            $table->double("Summa")->nullable();
            $table->string("PlatelshikSchet")->nullable();
            $table->date("DataSpisano")->nullable();
            $table->string("Platelshchick", 250)->nullable();
            $table->string("Platelshchick1", 250)->nullable();
            $table->string("PlatelshchickINN", 50)->nullable();
            $table->string("PlatelshchickKPP", 50)->nullable();
            $table->string("PlatelshchickRasChshet", 50)->nullable();
            $table->string("PlatelshchickBank1", 100)->nullable();
            $table->string("PlatelshchickBIK", 50)->nullable();
            $table->string("PlatelshchickKorschet", 50)->nullable();
            $table->string("RasCHSchet_kontragent")->nullable();
            $table->string("PoluchatelSchet", 50)->nullable();
            $table->date("DataPostupilo")->nullable();
            $table->string("Poluchatel", 250)->nullable();
            $table->string("Poluchatel1", 250)->nullable();
            $table->string("PoluchatelINN", 50)->nullable();
            $table->string("PoluchatelKPP", 50)->nullable();
            $table->string("PoluchatelRasChshet", 50)->nullable();
            $table->string("PoluchatelBank1", 100)->nullable();
            $table->string("PoluchatelBIK", 50)->nullable();
            $table->string("PoluchatelKorschet", 50)->nullable();
            $table->string("VidPlatezha", 25)->nullable();
            $table->string("VidOplaty", 25)->nullable();
            $table->string("SrokAksepta", 25)->nullable();
            $table->string("UslovieOplaty1", 25)->nullable();
            $table->string("StatusSostavitelya", 25)->nullable();
            $table->string("PokazatelKBK", 50)->nullable();
            $table->string("OKATO", 50)->nullable();
            $table->string("PokazatelOsnovaniya", 50)->nullable();
            $table->string("PokazatelPerioda", 50)->nullable();
            $table->string("PokazatelNomera", 50)->nullable();
            $table->string("PokazatelDaty", 50)->nullable();
            $table->string("Ocherednost", 50)->nullable();
            $table->text("NaznacheniePlatezha")->nullable();
            $table->string("VidAkkreditiva", 50)->nullable();
            $table->string("NomerSchetaPostavshchika", 50)->nullable();
            $table->string("PlateZHPOPredst", 50)->nullable();
            $table->string("DopolNUsloviya", 50)->nullable();
            $table->date("DataOtsylkiDok")->nullable();
            $table->string("KodNazPlatezha", 50)->nullable();
            $table->string("Kod", 50)->nullable();
            $table->string("KodDebitora", 50)->nullable();
            $table->string("PokazatelTipa", 50)->nullable();
            $table->string("NazvanieFajla")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plateg_vipiska_all');
    }
}
