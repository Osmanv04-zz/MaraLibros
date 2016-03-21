<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {
            $table->increments('IDLibro');
            $table->string('titulo');
            $table->string('autor');
            $table->integer('anoEdicion');
            $table->string('grado');
            $table->float('precio');
            $table->string('url');
            $table->integer('nroEdicion');
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
        Schema::drop('libro');
    }
}
