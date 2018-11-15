<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePecaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peca', function (Blueprint $table) {
           
            $table->increments('id');
            $table->String('nome');
            $table->String('descricao');
            $table->float('peso_medio');
            $table->integer('estado_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->integer('artesao_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estado');
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('artesao_id')->references('id')->on('artesao');
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
        Schema::dropIfExists('peca');
    }
}
