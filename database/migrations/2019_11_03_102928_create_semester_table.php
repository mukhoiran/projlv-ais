<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemesterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semester', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('semId'); //ID Semester
            $table->date('semTglMulai'); //Tanggal Mulai Semster Aktif
            $table->date('semTglSelesai'); //Tanggal Selesai Semester Aktif
            $table->integer('semTahun'); //Tahun Semester Aktif
            $table->tinyInteger('semNmSemtId'); //Nama Semester Aktif
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
        Schema::dropIfExists('semester');
    }
}
