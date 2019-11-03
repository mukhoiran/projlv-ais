<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKurikulumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kurikulum', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kurId'); //ID Kurikulum
            $table->integer('kurProdiKode'); //Kode Program Studi
            $table->integer('kurTahun'); //Tahun Kurikulum dibuat
            $table->string('kurNama'); //Nama Sebutan Kurikulum
            $table->string('kurNoSkRektor'); //Nomor Surat Keputusan yang Mengesahkan Kurikulum
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
        Schema::dropIfExists('kurikulum');
    }
}
