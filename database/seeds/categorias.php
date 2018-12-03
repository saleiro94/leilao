<?php

use Illuminate\Database\Seeder;

class categorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([   
            'descricao' => "Bonecos",
        ]);
        DB::table('categoria')->insert([   
            'descricao' => "Vidros",
        ]);
        DB::table('categoria')->insert([   
            'descricao' => "Madeiras",
        ]);
        DB::table('categoria')->insert([   
            'descricao' => "Artesanato",
        ]);
        DB::table('categoria')->insert([   
            'descricao' => "Loiça",
        ]);
        DB::table('categoria')->insert([   
            'descricao' => "Ferro",
        ]);
    }
}
