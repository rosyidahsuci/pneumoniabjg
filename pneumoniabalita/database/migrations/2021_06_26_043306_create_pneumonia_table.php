<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePneumoniaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pneumonia', function (Blueprint $table){
            $table->bigIncrements('id_pneumonia');
            $table->integer('id_tahun')->unsigned();
            $table->foreign('id_tahun')->references('id_tahun')->on('tahun');
            $table->integer('id_kecamatan')->unsigned();
            $table->foreign('id_kecamatan')->references('id_kecamatan')->on('kecamatan');
            $table->bigInteger('id_lingkungan')->unsigned();
            $table->foreign('id_lingkungan')->references('id_lingkungan')->on('lingkungan');
            $table->bigInteger('id_gizi')->unsigned();
            $table->foreign('id_gizi')->references('id_gizi')->on('gizi');
            $table->bigInteger('jumlah_balita');
            $table->bigInteger('jumlah_penderita');
            $table->bigInteger('penderita_ditangani');
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
        Schema::dropIfExists('pneumonia');
    }
}
