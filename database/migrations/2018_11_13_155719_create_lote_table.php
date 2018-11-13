<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lote', function (Blueprint $table) {
           
            $table->increments('id');
            $table->date('data_inicio');
            $table->dateTime('hora_inicio');
            $table->dateTime('hora_fim');
            $table->date('data_fim');
            $table->integer('peca_id')->unsigned();
            $table->integer('estado_id')->unsigned();
            $table->foreign('peca_id')->references('id')->on('peca');
            $table->foreign('estado_id')->references('id')->on('estado');
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
        Schema::dropIfExists('lote');
    }
}
