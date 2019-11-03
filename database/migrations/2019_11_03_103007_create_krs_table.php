<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('krs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('krsId'); //ID KRS dari Mahasiswa
            $table->integer('krsSempId'); //Semester Prodi ID
            $table->string('krsNim'); //Nomor Induk Mahasiwa
            $table->tinyInteger('krsPaketSem'); //Paket Semester
            $table->string('krsTglTransaksi'); //Tanggal Pengambilan Matakuliah
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('krs');
    }
}
