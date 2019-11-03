<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKrsDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('krs_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('krsdtId'); //ID KRS data
            $table->bigInteger('krsdtKrsId')->unsigned(); //ForeignKey dengan KRS
            $table->tinyInteger('krsdtBobotNilai'); //Bobot Nilai Matakuliah
            $table->string('krsdtKodeNilai'); //Kode Nilai yang diberikan
            $table->integer('krsKlsId'); //Id Kelas
            $table->timestamps();

            $table->foreign('krsdtKrsId')->references('id')->on('krs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('krs_detail');
    }
}
