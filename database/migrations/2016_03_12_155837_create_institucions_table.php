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
        Schema::create('institucions', function (Blueprint $table) {
            $table->increments('IDInstitucion');
            $table->string('nombre');
            $table->string('rif');
            $table->string('correo');
            $table->string('direccion');
            $table->integer('IDUsuario')->unsigned();

            $table->foreign('IDUsuario')->references('IDUsuario')->on('usuarios');
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
        Schema::drop('institucions');
    }
}
