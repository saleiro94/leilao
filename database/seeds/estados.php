<?php

use Illuminate\Database\Seeder;

class estados extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado')->insert([
            
            'descricao' => str_random(10),
        ]);
    }
}
