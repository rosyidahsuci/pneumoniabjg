<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLingkunganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lingkungan', function (Blueprint $table) {
            $table->bigIncrements('id_lingkungan');
            $table->integer('id_tahun')->unsigned();
            $table->foreign('id_tahun')->references('id_tahun')->on('tahun');
            $table->integer('id_kecamatan')->unsigned();
            $table->foreign('id_kecamatan')->references('id_kecamatan')->on('kecamatan');
            $table->bigInteger('rumah_sehat');
            $table->bigInteger('sumber_air_minum');
            $table->bigInteger('sanitasi');
            $table->bigInteger('tupm');
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
        Schema::dropIfExists('lingkungan');
    }
}
