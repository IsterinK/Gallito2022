<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Manuel Patiño",
            'email' => "manuel121938@gmail.com",
            'password' => Hash::make('hola123'),
        ]);

        DB::table('users')->insert([
            'name' => "Asistente",
            'email' => "asistente@gmail.com",
            'password' => Hash::make('hola123'),
        ]);

        DB::table('users')->insert([
            'name' => "Diseñador",
            'email' => "disenador@gmail.com",
            'password' => Hash::make('hola123'),
        ]);
    }
}
