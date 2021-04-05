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
            $table->unsignedBigInteger("id_plateg_vipiska_all");
            $table->foreign("id_plateg_vipiska_all")->references("id")->on("plateg_vipiska_all");
            $table->string("MD5_plateg", 100);
            $table->date("data_plateg");
            $table->string("comment_text", 200);
            $table->unsignedBigInteger("osnovanie_user");
            $table->foreign("osnovanie_user")->references("id")->on("osnovanie_plateg");
            $table->unsignedBigInteger("id_sotrudnik");
            $table->unsignedBigInteger("id_proekt");
            $table->foreign("id_proekt")->references("id")->on("proekt");
            $table->unsignedBigInteger("id_kontragent");
            $table->foreign("id_kontragent")->references("id")->on("kontragent");
            $table->double("summ_plateg");
            $table->double("summ_report");
            $table->unsignedBigInteger("inn_kontragent");
            $table->foreign("inn_kontragent")->references("id")->on("inn_kontragent");
            $table->string("PlatelshchiKRasCHSchet", 200);
            $table->string("PlatelshchiKINN", 100);
            $table->string("PoluchatelRasCHSchet", 100);
            $table->string("PoluchatelINN", 100);
            $table->string("Tip_plateg", 100);
            $table->string("Сheck_report", 10);
            $table->datetime("data_report");
            
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
