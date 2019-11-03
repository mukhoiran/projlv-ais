<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKrsNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('krs_nilai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('krsnaId');
            $table->bigInteger('krsnaKrsDtId')->unsigned(); //ForeignKey
            $table->integer('krsnaNilaiTugas');
            $table->integer('krsnaNilaiUTS');
            $table->integer('krsnaNilaiUAS');
            $table->timestamps();

            $table->foreign('krsnaKrsDtId')->references('id')->on('krs_detail')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('krs_nilai');
    }
}
