<?php

use Illuminate\Database\Seeder;

class estado_de_conservados extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_conservacaos')->insert([
            
            'descricao' => str_random(10),
        ]);
    }
}
