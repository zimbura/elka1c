<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNameKontragentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('name_kontragent', function (Blueprint $table) {
            $table->id();
            $table->text("name_kontragent");
            $table->unsignedBigInteger("id_kontragent");
            $table->foreign("id_kontragent")->references("id")->on("kontragent");
            $table->string("NameDefault")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('name_kontragent');
    }
}
