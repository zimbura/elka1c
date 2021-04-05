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
            $table->string("raschshet_kontragent", 50);
            $table->unsignedBigInteger("id_kontragent");
            $table->foreign("id_kontragent")->references("id")->on("kontragent");
            $table->string("comment_schet_kontragent", 255);
            
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
