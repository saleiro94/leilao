<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilizadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilizador', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nome');
            $table->integer('contacto_id')->unsigned();
            $table->integer('tipo_id')->unsigned();
            $table->foreign('contacto_id')->references('id')->on('contactos');
            $table->foreign('tipo_id')->references('id')->on('tipo_utilizador');
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
        Schema::dropIfExists('utilizador');
    }
}
