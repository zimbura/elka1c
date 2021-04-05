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
            $table->string("SektsiyaDocumenta", 100);
            $table->string("Nomer", 100);
            $table->date("Data");
            $table->double("Summa");
            $table->string("PlatelshikSchet");    
            $table->date("DataSpisano");    
            $table->string("Platelshchick", 200);    
            $table->string("Platelshchick1", 200);    
            $table->string("PlatelshchickINN", 50);    
            $table->string("PlatelshchickKPP", 50);    
            $table->string("PlatelshchickRasChshet", 50);    
            $table->string("PlatelshchickBank1", 100);    
            $table->string("PlatelshchickBIK", 50);    
            $table->string("PlatelshchickKorschet", 50);    
            $table->string("PoluchatelSchet", 50);    
            $table->date("DataPostupilo");
            $table->string("Poluchatel", 100);
            $table->string("Poluchatel1", 100);
            $table->string("PoluchatelINN", 50);
            $table->string("PoluchatelKPP", 50);
            $table->string("PoluchatelRasChshet", 50);
            $table->string("PoluchatelBank1", 100);
            $table->string("PoluchatelBIK", 50);
            $table->string("PoluchatelKorschet", 50);
            $table->string("VidPlatezha", 25);
            $table->string("VidOplaty", 25);
            $table->string("SrokAksepta", 25);
            $table->string("UslovieOplaty1", 25);
            $table->string("StatusSostavitelya", 25);
            $table->string("PokazatelKBK", 50);
            $table->string("OKATO", 50);
            $table->string("PokazatelOsnovaniya", 50);
            $table->string("PokazatelPerioda", 50);
            $table->string("PokazatelNomera", 50);
            $table->string("PokazatelDaty", 50);
            $table->string("Ocherednost", 50);
            $table->string("NaznacheniePlatezha", 250);
            $table->string("VidAkkreditiva", 50);
            $table->string("NomerSchetaPostavshchika", 50);
            $table->string("PlateZHPOPredst", 50);
            $table->string("DopolNUsloviya", 50);
            $table->date("DataOtsylkiDok");
            $table->string("KodNazPlatezha", 50);
            $table->string("Kod", 50);
            $table->string("KodDebitora", 50);
            $table->string("PokazatelTipa", 50);
            $table->string("NazvanieFajla", 50);
            $table->timestamps();
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
