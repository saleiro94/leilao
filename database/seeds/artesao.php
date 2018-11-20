<?php

use Illuminate\Database\Seeder;

class artesao extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artesao')->insert([
            
           'nome'=>str_random(10),
            'idade'=>1,
           'email'=>str_random(10),
            'categoria_id'=>1,
            'regiao_id'=>1,
        ]);
        
    }
}
