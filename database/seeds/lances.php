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
            
            'valor' => str_random(10),
            'hora' => str_random(10),
            'data' => str_random(10),
            
        
        ]);
    }
}
