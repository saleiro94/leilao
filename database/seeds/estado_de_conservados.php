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
            'descricao' => "Novo",
        ]);
        DB::table('estado_conservacaos')->insert([
            'descricao' => "Novo, sem falhas",
        ]);
        DB::table('estado_conservacaos')->insert([
            'descricao' => "Novo,com falhas",
        ]);
        DB::table('estado_conservacaos')->insert([
            'descricao' => "Usado, sem falhas",
        ]);
        DB::table('estado_conservacaos')->insert([
            'descricao' => "Usado, com ligeiras falhas",
        ]);
        DB::table('estado_conservacaos')->insert([
            'descricao' => "Usado, com debilidades",
        ]);
    }
}
