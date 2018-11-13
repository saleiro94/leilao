<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtesaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artesao', function (Blueprint $table) {
            
            $table->increments('id');
            $table->String('nome');
            $table->integer('idade');
            $table->String('email');
            $table->integer('categoria_id')->unsigned();
            $table->integer('regiao_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categoria');
            $table->foreign('regiao_id')->references('id')->on('regiao');
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
        Schema::dropIfExists('artesao');
    }
}
