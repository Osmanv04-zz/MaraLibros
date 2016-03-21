<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitucionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institucion', function (Blueprint $table) {
            $table->increments('IDInstitucion');
            $table->string('nombre');
            $table->string('rif');
            $table->string('correo')->unique();
            $table->string('direccion');
            $table->integer('IDUsuario')->unsigned();
            $table->boolean('suscrito');
            $table->date('fecha_sus');

            $table->foreign('IDUsuario')->references('IDUsuario')->on('usuario');
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
        Schema::drop('institucion');
    }
}
