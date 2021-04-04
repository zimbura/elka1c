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
            $table->unsignedBigInteger("id_zakazhik_proekt");
            $table->foreign("id_zakazhik_proekt")->references("id")->on("kontragent");
            $table->string("name_proekt", 200);
            $table->string("opisanie_proekt", 500);
            $table->double("summ_proekt_all");
            $table->string("sotrudnik_proekt", 100);
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
