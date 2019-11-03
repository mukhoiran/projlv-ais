<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemesterProdiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semester_prodi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sempId'); //ID Semester pada Program Studi
            $table->integer('sempSemId'); //ID Semester
            $table->date('sempTglMulaiKrs'); //Tanggal Mulai Kegiatan KRS untuk Prodi
            $table->date('sempTglSelesaiKrs'); //Tanggal Akhir Kegiatan Pengisian KRS oleh prodi
            $table->date('sempTglMulaiInputNilai'); //Tanggal Mulai Dosen Proses Input Nilai
            $table->date('sempTglSelesaiInputNilai'); //Tanggal Akhir Dosen Proses Input Nilai
            $table->tinyInteger('sempIsAktif'); //Status Semester Aktif / Tidak
            $table->integer('sempProdiKode'); //Kode Program Studi
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
        Schema::dropIfExists('semester_prodi');
    }
}
