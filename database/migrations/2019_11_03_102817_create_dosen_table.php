<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('dsnNidn'); //Nomor Induk Dosen Nasional
            $table->integer('dsnNip'); //Nomor Induk Pegawai
            $table->string('dsnNama'); //Nama Dosen
            $table->integer('dsnProdiKode'); //Nama Kode Prodi Asal Dosen
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
        Schema::dropIfExists('dosen');
    }
}
