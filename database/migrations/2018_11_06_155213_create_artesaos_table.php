<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtesaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artesaos', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nome');
            $table->integer('idade');
            $table->String('email');
            $table->integer('id_categoria');
            $table->integer('id_regiao');
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
        Schema::dropIfExists('artesaos');
    }
}
