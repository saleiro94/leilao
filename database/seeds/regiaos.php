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
            'localizacao' => "Barcelos",
            'codigo_postal' => 4754-909,
            'descricao' => "Norte,litoral",
        ]);
        DB::table('regiao')->insert([
            'localizacao' => "Chaves",
            'codigo_postal' => 5400-581,
            'descricao' => "Norte,interior",
        ]);
        DB::table('regiao')->insert([
            'localizacao' => "Leiria",
            'codigo_postal' => 2400-823,
            'descricao' => "Centro,litoral",
        ]);
        DB::table('regiao')->insert([
            'localizacao' => "Guarda",
            'codigo_postal' =>6301-909,
            'descricao' => "Centro, interior",
        ]);
        DB::table('regiao')->insert([
            'localizacao' => "Sines",
            'codigo_postal' => 7520-124,
            'descricao' => "Sul,litoral",
        ]);
        DB::table('regiao')->insert([
            'localizacao' => "Évora",
            'codigo_postal' =>7000-000 ,
            'descricao' => "Sul,interior",
        ]);
        

    
    }
}
