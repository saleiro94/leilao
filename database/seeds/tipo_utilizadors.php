<?php

use Illuminate\Database\Seeder;

class tipo_utilizadors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_utilizador')->insert([
            'descricao' => str_random(10)
        ]);
        
      
    }
}
