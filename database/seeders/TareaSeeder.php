<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tareas')->insert([
            'nombre' => 'Programar',
            'descripcion' => 'Permite registrar una jornada',
            'orden'=>'1',
            'url'=>'',
            'modulo_id'=>'1',
            'estado'=>1,
          
       ]);
        DB::table('tareas')->insert([
            'nombre' => 'Asistencia',
            'descripcion' => 'Permite marcar asistencia a una determinada jornada',
            'orden'=>'2',
            'url'=>'',
            'modulo_id'=>'1',
            'estado'=>1,
        
        ]);
        DB::table('tareas')->insert([
            'nombre' => 'Registrar',
            'descripcion' => 'Permite registrar a un nuevo trabajador',
            'orden'=>'1',
            'url'=>'',
            'modulo_id'=>'2',
            'estado'=>1,
        
        ]);
    }
}
