<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiziTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gizi', function (Blueprint $table) {
            $table->bigIncrements('id_gizi');
            $table->integer('id_tahun')->unsigned();
            $table->foreign('id_tahun')->references('id_tahun')->on('tahun');
            $table->integer('id_kecamatan')->unsigned();
            $table->foreign('id_kecamatan')->references('id_kecamatan')->on('kecamatan');
            $table->integer('balita_ditimbang');
            $table->integer('gizi_buruk');
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
        Schema::dropIfExists('gizi');
    }
}
