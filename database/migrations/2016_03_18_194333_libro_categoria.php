<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LibroCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_categoria', function (Blueprint $table) {

            $table->integer('IDCategoria')->unsigned();

            $table->foreign('IDCategoria')->references('IDCategoria')->on('categoria');

            $table->integer('IDLibro')->unsigned();

            $table->foreign('IDLibro')->references('IDLibro')->on('libro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('libro_categoria');
    }
}
