<?php

use Illuminate\Database\Seeder;

class contactoss extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contactos')->insert([
            
            'n_telefone' => 1234,
            'morada' => str_random(10),
            'email' => str_random(10),
            
        
        ]);
    }
}
