<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(estado_de_conservados::class);
        $this->call(contactoss::class);
        $this->call(tipo_utilizadors::class);
        $this->call(regiaos::class);
        $this->call(estados::class);
        $this->call(categorias::class);
     
       $this->call(user::class);
       $this->call(artesao::class);
        $this->call(pecas::class);
        $this->call(lotes::class);
        $this->call(lances::class);
       
    
    }
}
