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
            $table->unsignedBigInteger("id_schet")->nullable();
            $table->foreign("id_schet")->references("id")->on("raschshet_kontragent");
            $table->unsignedBigInteger("id_user")->nullable();
            $table->foreign("id_user")->references("id")->on("users");
            $table->string("RasChschet", 50)->nullable();
            $table->date("DataSozdaniya_vipiska")->nullable();
            $table->time("Vremyasozdaniya")->nullable();
            $table->date("DataNachala")->nullable();
            $table->date("DataKontsa")->nullable();
            $table->double("NachalnyOstatok", 100)->nullable();
            $table->double("VsegoPostupilo", 100)->nullable();
            $table->double("VsegoSpisano", 100)->nullable();
            $table->double("KonechniyOstatok", 100)->nullable();
            $table->string("VersiyaFormata", 25)->nullable();
            $table->string("VsegoSektsijVDokumente", 25)->nullable();
            $table->string("DublikatoVSektsij", 25)->nullable();
            $table->string("ZagruzhenoSektsij", 25)->nullable();
            $table->string("NazvanieFajla", 250)->nullable();
            $table->datetime("DataObrabotkiFajla")->nullable();
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
