<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlategVipiskaLincTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plateg_vipiska_linc', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_plateg_vipiska_all")->nullable();
            $table->foreign("id_plateg_vipiska_all")->references("id")->on("plateg_vipiska_all");
            $table->string("MD5_plateg", 100)->nullable();
            $table->date("data_plateg")->nullable();
            $table->string("comment_text", 200)->nullable();
            $table->unsignedBigInteger("osnovanie_user")->nullable();
            $table->foreign("osnovanie_user")->references("id")->on("osnovanie_plateg")->nullable();
            $table->unsignedBigInteger("id_sotrudnik")->nullable();
            $table->foreign("id_sotrudnik")->references("id")->on("users")->nullable();
            $table->unsignedBigInteger("id_proekt")->nullable();
            $table->foreign("id_proekt")->references("id")->on("proekt")->nullable();
            $table->unsignedBigInteger("id_kontragent")->nullable();
            $table->foreign("id_kontragent")->references("id")->on("kontragent");
            $table->double("summ_plateg")->nullable();
            $table->double("summ_report")->nullable();
            $table->unsignedBigInteger("inn_kontragent")->nullable();
            $table->foreign("inn_kontragent")->references("id")->on("inn_kontragent");
            $table->string("PlatelshchiKRasCHSchet", 200)->nullable();
            $table->string("PlatelshchiKINN", 100)->nullable();
            $table->string("PoluchatelRasCHSchet", 100)->nullable();
            $table->string("PoluchatelINN", 100)->nullable();
            $table->string("Tip_plateg", 100)->nullable();
            $table->string("Сheck_report", 10)->nullable();
            $table->datetime("data_report")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plateg_vipiska_linc');
    }
}
