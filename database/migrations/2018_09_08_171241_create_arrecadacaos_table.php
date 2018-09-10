<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrecadacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrecadacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mes');
            $table->string('ano');
            $table->double('faturamento');
            $table->double('Estorno');
            $table->double('saldofaturado');
            $table->double('contafaturada');
            $table->double('arrecadacao');
            $table->double('contasarrecadadas');


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
        Schema::dropIfExists('arrecadacaos');
    }
}
