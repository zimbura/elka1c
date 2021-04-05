<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOsnovaniePlategTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('osnovanie_plateg', function (Blueprint $table) {
            $table->id();
            $table->string("name_osnovanie_user", 100);
            $table->integer("osnovanie_user_check");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('osnovanie_plateg');
    }
}
