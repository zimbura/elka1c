<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontragentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontragent', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_user")->nullable();
            $table->foreign("id_user")->references("id")->on("users");
            $table->string("tel_kontragent")->nullable();
            $table->string("email_kontragent")->nullable();
            $table->string("name_kontragent");
            $table->string("forma_kontragent")->nullable();
            $table->string("nalog_kontragent")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kontragents');
    }
}
