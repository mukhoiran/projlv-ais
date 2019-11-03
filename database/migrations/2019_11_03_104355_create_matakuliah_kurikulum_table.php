<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatakuliahKurikulumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliah_kurikulum', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mkkurId'); //ID Matakuliah Kurikulum
            $table->string('mkkurNama'); //Nama Matakuliah pada Kurikulum
            $table->bigInteger('mkkurKurId')->unsigned(); //ForeignKey Table Kurikulum
            $table->tinyInteger('mkkurSemester'); //Semester Mata Kuliah digunakan
            $table->tinyInteger('mkkurJenisSemester'); //jenis Semester Reguler / Pilihan
            $table->tinyInteger('mkkurJumlahSks'); //Jumlah SKS Matakuliah
            $table->timestamps();

            $table->foreign('mkkurKurId')->references('id')->on('kurikulum')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matakuliah_kurikulum');
    }
}
