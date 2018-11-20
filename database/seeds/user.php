<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10),
            'email_verified_at'=>date("Y-m-d H:i:s"),
            'password' => str_random(10),
            'contacto_id'=>1,
            'tipo_id'=>1,
        ]);
    }
}
