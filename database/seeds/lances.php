<?php

use Illuminate\Database\Seeder;

class lances extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lance')->insert([
            
            'valor_licitacao' => 1,
            'hora' => str_random(10),
            'data' => new DateTime,
            'users_licitou'=>1,
            'peca_id'=>1,
        
        ]);
    }
}
