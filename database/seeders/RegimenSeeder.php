<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegimenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regimens')->insert([
            'descripcion' => 'D.L 276',
            'estado' => 1,
         
        ]);

        DB::table('regimens')->insert([
            'descripcion' => 'D.L 1057',
            'estado' => 1,     
        ]);
    }
}
