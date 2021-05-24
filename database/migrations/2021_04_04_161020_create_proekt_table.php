<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProektTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proekt', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("idKontragent");
            $table->foreign("idKontragent")->references("id")->on("kontragent");
            $table->unsignedBigInteger("idKontragentMy");
            $table->foreign("idKontragentMy")->references("id")->on("kontragent");
            $table->string("name_proekt", 200);
            $table->string("opisanie_proekt");
            $table->double("summ_proekt_all");
            $table->date("DataProekt");
            $table->date("DataEndProekt");
            $table->string("ContactProekt");
            $table->unsignedBigInteger("idStatusProekt");
            $table->foreign("idStatusProekt")->references("id")->on("status_proekt");
            $table->unsignedBigInteger("CategoryProekt");
            $table->foreign("CategoryProekt")->references("id")->on("category_proekt");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proekt');
    }
}
