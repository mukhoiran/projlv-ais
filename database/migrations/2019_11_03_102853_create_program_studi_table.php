<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramStudiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_studi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('prodiKode'); //Kode Program Studi
            $table->string('prodiNama'); //Nama Program Studi
            $table->integer('prodiKodeJurusan'); //Kode Jurusan Induk Program Studi
            $table->string('prodiJarKode'); //Jenjang Program Studi
            $table->string('prodiKodeLabel'); //Kode Inisial untuk Program Studi
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
        Schema::dropIfExists('program_studi');
    }
}
