<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'nombre' => 'Administrador',
            'descripcion'=>'Rol del administrador del sistema',
            'estado' => 1,
         
        ]);

        DB::table('roles')->insert([
            'nombre' => 'Asistente',
            'descripcion'=>'Rol del asistente de jornada',
            'estado' => 1,  
        ]);
    }
}
