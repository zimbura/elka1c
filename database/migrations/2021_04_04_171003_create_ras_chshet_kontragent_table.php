<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRasChshetKontragentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raschshet_kontragent', function (Blueprint $table) {
            $table->id();
            $table->string("raschshet_kontragent", 50)->nullable();
            $table->unsignedBigInteger("id_kontragent")->nullable();
            $table->foreign("id_kontragent")->references("id")->on("kontragent");
            $table->string("CurrencyRaschetnyjSchet")->nullable();
            $table->string("RaschetnyjSchetDefault")->nullable();
            $table->string("RasChshetBik")->nullable();
            $table->string("comment_schet_kontragent", 255)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ras_chshet_kontragent');
    }
}
