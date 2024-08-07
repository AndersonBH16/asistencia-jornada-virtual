<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Role_TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('role_tarea')->insert(['role_id'=>1, 'tarea_id'=>1, 'estado'=>1,]);
        DB::table('role_tarea')->insert(['role_id'=>1, 'tarea_id'=>3, 'estado'=>1,]);
        DB::table('role_tarea')->insert(['role_id'=>2, 'tarea_id'=>2, 'estado'=>1,]);
    }
}
