<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sedes')->insert([
            'descripcion' => 'TRUJILLO',
          
       ]);

       DB::table('sedes')->insert([
           'descripcion' => 'VALLE JEQUETEPEQUE',
         
       ]);
      
       DB::table('sedes')->insert([
        'descripcion' => 'HUAMACHUCO',
      
       ]);
    }
}
