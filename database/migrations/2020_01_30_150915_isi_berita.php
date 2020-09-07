<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IsiBerita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
     Schema::create('berita_isi', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->BigInteger('berita_id')->unsigned();
        $table->foreign('berita_id')->references('id_berita')->on('berita')->onDelete('cascade');
        $table->string('berita_isi');
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
        //
    }
}
