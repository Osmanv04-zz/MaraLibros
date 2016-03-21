<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LibroPedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_pedido', function (Blueprint $table) {
            $table->integer('cantidad');
            $table->integer('IDPedido')->unsigned();

            $table->foreign('IDPedido')->references('IDPedido')->on('pedido');

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
        Schema::drop('libro_pedido');
    }
}
