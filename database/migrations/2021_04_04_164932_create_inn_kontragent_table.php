<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInnKontragentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inn_kontragent', function (Blueprint $table) {
            $table->id();
            $table->string("inn_kontragent", 10);
            $table->unsignedBigInteger("id_kontragent");
            $table->foreign("id_kontragent")->references("id")->on("kontragent");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inn_kontragent');
    }
}
