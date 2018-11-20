<?php

use Illuminate\Database\Seeder;

class lotes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lote')->insert([
            'data_inicio' => new DateTime,
            'hora_inicio' =>new DateTime,
            'hora_fim' => new DateTime,
           'data_fim' => new DateTime,
           'peca_id'=>1,
            'estado_id'=>1
        ]);

        
    }
}
