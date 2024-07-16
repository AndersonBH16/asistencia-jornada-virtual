<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Marilyn Solís Guzmán',
            'email' => 'msolis@unitru.edu.pe',
            'password'=>Hash::make('12345678'),
       ]);

       DB::table('users')->insert([
           'name' => 'Eduardo Sifuentes Moreno',
           'email' => 'jesifuentes@unitru.edu.pe',
           'password'=>Hash::make('12345678'),
      ]);
    }
}
