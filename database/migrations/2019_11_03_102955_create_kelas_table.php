<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('klsId'); //ID Kelas
            $table->integer('klsMkKurId'); //ForeignKey matakuliah_kurikulum
            $table->bigInteger('klsDsnId')->unsigned(); //ForeignKey table dosen
            $table->integer('klsSempId'); //Kode Semester Prodi
            $table->string('klsNama'); //Nama Kelas
            $table->timestamps();

            $table->foreign('klsDsnId')->references('id')->on('dosen')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
}
