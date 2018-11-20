<?php

use Illuminate\Database\Seeder;

class regiaos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regiao')->insert([
            'localizacao' => str_random(10),
            'codigo_postal' => str_random(10),
            'descricao' => 12.0,
        ]);
        

    
    }
}
