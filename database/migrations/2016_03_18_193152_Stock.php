<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('stock', function (Blueprint $table) {
            $table->integer('cantidad');
            $table->integer('IDLibro')->unsigned();

            $table->foreign('IDLibro')->references('IDLibro')->on('libro');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('stock');
    }
}
