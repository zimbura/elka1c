<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOstatkiSchetKontragentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ostatki_schet_kontragent', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_schet");
            $table->foreign("id_schet")->references("id")->on("raschshet_kontragent");
            $table->unsignedBigInteger("id_kontragent");
            $table->foreign("id_kontragent")->references("id")->on("kontragent");
            $table->string("RasChschet", 50); 
            $table->date("DataSozdaniya_vipiska"); 
            $table->time("Vremyasozdaniya"); 
            $table->date("DataNachala"); 
            $table->date("DataKontsa"); 
            $table->double("NachalnyOstatok", 100); 
            $table->double("VsegoPostupilo", 100); 
            $table->double("VsegoSpisano", 100); 
            $table->double("KonechniyOstatok", 100); 
            $table->string("VersiyaFormata", 25);
            $table->string("VsegoSektsijVDokumente", 25); 
            $table->string("ZagruzhenoSektsij", 25); 
            $table->string("NazvanieFajla", 250); 
            $table->datetime("DataObrabotkiFajla"); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ostatki_schet_kontragent');
    }
}
