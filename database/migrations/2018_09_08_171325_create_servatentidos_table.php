<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServatentidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servatentidos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data');
            $table->integer('setorcomercials_id')->unsigned();
            $table->foreign('setorcomercials_id')->references('id')->on('setorcomercials')->onDelete('cascade');
            $table->integer('servicos_id')->unsigned();
            $table->foreign('servicos_id')->references('id')->on('servicos')->onDelete('cascade');
            $table->integer('quantidade');

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
        Schema::dropIfExists('servatentidos');
    }
}
