<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('mhsNim'); //Nomor Induk Mahasiswa
            $table->string('mhsNama'); //Nama Mahasiswa
            $table->integer('mhsProdiKode'); //Kode Program Studi
            $table->integer('mhsAngkatan'); //Tahun Angkatan Masuk Mahasiswa
            $table->string('mhsKurId'); //ID Kurikulum yang diikuti Mahasiswa
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
        Schema::dropIfExists('mahasiswa');
    }
}
