<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lance', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('valor_licitacao');
            $table->string('hora');
            $table->date('data');
            
            $table->integer('users_licitou')->unsigned();
            $table->integer('peca_id')->unsigned();
            $table->foreign('users_licitou')->references('id')->on('users');
            $table->foreign('peca_id')->references('id')->on('peca');
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
        Schema::dropIfExists('lance');
    }
}
