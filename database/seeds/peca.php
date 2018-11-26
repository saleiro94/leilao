<?php

use Illuminate\Database\Seeder;

class pecas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peca')->insert([
            'nome' => str_random(10),
            'descricao' => str_random(10),
            'peso_medio' => 12.0,
            'estado_id'=> 1,
            'users_id'=> 1,
            'artesao_id'=>1,
            'img'=> str_random(10),
            'valor'=>1,
        ]);
        
    }
}
