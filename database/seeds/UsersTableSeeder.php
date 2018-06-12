<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"=>"Administrador",
            "telefono"=>"3166234236",
            "email"=>"gerenciatecnica@siesiscolombia.com",
            "password"=>"2034770",
    
        ]);
    }
}
