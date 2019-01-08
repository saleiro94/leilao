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
            'descricao_est' => "Novo",
        ]);
        DB::table('estado_conservacaos')->insert([
            'descricao_est' => "Novo, sem falhas",
        ]);
        DB::table('estado_conservacaos')->insert([
            'descricao_est' => "Novo,com falhas",
        ]);
        DB::table('estado_conservacaos')->insert([
            'descricao_est' => "Usado, sem falhas",
        ]);
        DB::table('estado_conservacaos')->insert([
            'descricao_est' => "Usado, com ligeiras falhas",
        ]);
        DB::table('estado_conservacaos')->insert([
            'descricao_est' => "Usado, com debilidades",
        ]);
    }
}
