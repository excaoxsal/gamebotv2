<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gambar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('gambar', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->BigInteger('berita_id')->unsigned();
        $table->foreign('berita_id')->references('id_berita')->on('berita');
        $table->string('file');
        $table->string('keterangan');
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
        Schema::dropIfExists('gambar');
    }
}
