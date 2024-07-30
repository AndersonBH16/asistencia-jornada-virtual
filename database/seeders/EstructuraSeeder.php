<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstructuraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estructuras')->insert([
            'nombre' => 'RECTORADO',
            'dependencia_id'=>0,
            'nivel'=>7,
            'estado' => 1,         
        ]);        

        DB::table('estructuras')->insert([
            'nombre' => 'VICERRECTORADO DE INVESTIGACIÓN',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'VICERRECTORADO ACADÉMICO',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DIRECCIÓN DE ADMISIÓN',
            'dependencia_id'=>3,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DIRECCIÓN DE PROCESOS ACADÉMICOS',
            'dependencia_id'=>3,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DIRECCIÓN DE BIENESTAR UNIVERSITARIO',
            'dependencia_id'=>3,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DIRECCIÓN DE PRODUCCIÓN DE BIENES Y SERVICIOS',
            'dependencia_id'=>2,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DIRECCIÓN DE INNOVACIÓN Y TRANSFERENCIA TECNOLÓGICA',
            'dependencia_id'=>2,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'INSTITUTO DE INVESTIGACIÓN',
            'dependencia_id'=>2,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DIRECCIÓN DE INVESTIGACIÓN Y ÉTICA',
            'dependencia_id'=>2,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE PROCESOS DE ADMISIÓN',
            'dependencia_id'=>4,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE EVALUACIÓN',
            'dependencia_id'=>4,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE DESARROLLO ACADÉMICO',
            'dependencia_id'=>5,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE REGISTROS ACADÉMICOS',
            'dependencia_id'=>5,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE GESTIÓN DE RECURSOS EDUCATIVOS',
            'dependencia_id'=>5,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE ESTUDIOS GENERALES',
            'dependencia_id'=>5,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE SEGUIMIENTO DEL EGRESADO',
            'dependencia_id'=>5,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE SERVICIOS DE SALUD',
            'dependencia_id'=>6,
            'nivel'=>7,
            'estado' => 1,         
        ]); 
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE SERVICIO SOCIAL Y ALIMENTARIO',
            'dependencia_id'=>6,
            'nivel'=>7,
            'estado' => 1,         
        ]); 
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE RECREACIÓN Y DEPORTES',
            'dependencia_id'=>6,
            'nivel'=>7,
            'estado' => 1,         
        ]); 
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD FONDO EDITORIAL UNIVERSITARIO',
            'dependencia_id'=>10,
            'nivel'=>7,
            'estado' => 1,         
        ]); 

        DB::table('estructuras')->insert([
            'nombre' => 'OFICINA DE TECNOLOGÍAS DE LA INFORMACIÓN',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'SECRETARÍA GENERAL',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'OFICINA DE ASESORÍA JURÍDICA',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'OFICINA DE PLANEAMIENTO Y PRESUPUESTO',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'OFICINA DE RELACIONES NACIONALES E INTERNACIONALES',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'OFICINA DE GESTIÓN DE LA CALIDAD',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'OFICINA DE COMUNICACIÓN E IMAGEN INSTITUCIONAL',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DIRECCIÓN DE SERVICIOS EDUCATIVOS DE EXTENSIÓN',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DIRECCIÓN DE RESPONSABILIDAD SOCIAL Y EXTENSIÓN CULTURAL UNIVERSITARIA',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA DE POSGRADO',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
       
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE REDES Y PLATAFORMA UNT VIRTUAL',
            'dependencia_id'=>22,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE DESARROLLO DE SISTEMAS DE INFORMACIÓN',
            'dependencia_id'=> 22,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE SOPORTE TÉCNICO',
            'dependencia_id'=>22,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE RECURSOS HUMANOS',
            'dependencia_id'=>23,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE ABASTECIMIENTO',
            'dependencia_id'=>23,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE TESORERÍA',
            'dependencia_id'=>23,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE CONTABILIDAD',
            'dependencia_id'=>23,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD EJECUTORA DE INVERSIONES',
            'dependencia_id'=>23,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE SERVICIOS GENERALES',
            'dependencia_id'=>23,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE GESTIÓN DOCUMENTARIA Y DE GOBIERNO',
            'dependencia_id'=>24,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE TRÁMITE DOCUMENTARIO Y DE ARCHIVO',
            'dependencia_id'=>24,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD FORMULADORA DE PROYECTOS',
            'dependencia_id'=>26,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE PLANEAMIENTO',
            'dependencia_id'=>26,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE PRESUPUESTO',
            'dependencia_id'=>26,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE DESARROLLO ORGANIZACIONAL Y MODERNIZACIÓN',
            'dependencia_id'=>26,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE ESTADÍSTICA',
            'dependencia_id'=>26,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE GESTIÓN DE LA CALIDAD',
            'dependencia_id'=>28,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE ACREDITACIÓN Y LICENCIAMIENTO',
            'dependencia_id'=>28,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE SERVICIO EDUCATIVO DE EXTENSIÓN',
            'dependencia_id'=>30,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'UNIDAD DE CENTRO CULTURAL',
            'dependencia_id'=>30,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'FACULTAD DE CIENCIAS AGROPECUARIAS',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'FACULTAD DE CIENCIAS BIOLÓGICAS',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'FACULTAD DE CIENCIAS ECONÓMICAS',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'FACULTAD DE CIENCIAS FÍSICAS Y MATEMÁTICAS',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'FACULTAD DE CIENCIAS SOCIALES',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'FACULTAD DE DERECHO Y CIENCIAS POLÍTICAS',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'FACULTAD DE EDUCACIÓN Y CIENCIAS DE LA COMUNICACIÓN',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'FACULTAD DE ENFERMERÍA',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'FACULTAD DE ESTOMATOLOGÍA',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'FACULTAD DE FARMACIA Y BIOQUÍMICA',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'FACULTAD DE INGENIERIA',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'FACULTAD DE INGENIERIA QUÍMICA',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'FACULTAD DE MEDICINA',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'DECANATO DE FACULTAD DE CIENCIAS AGROPECUARIAS',
            'dependencia_id'=>53,
            'nivel'=>5,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'DECANATO DE FACULTAD DE CIENCIAS DE BIOLÓGICAS',
            'dependencia_id'=>54,
            'nivel'=>5,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DECANATO DE FACULTAD DE CIENCIAS ECONÓMICAS',
            'dependencia_id'=>55,
            'nivel'=>5,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DECANATO DE FACULTAD DE CIENCIAS FÍSICAS Y MATEMÁTICAS',
            'dependencia_id'=>56,
            'nivel'=>5,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DECANATO DE FACULTAD DE CIENCIAS SOCIALES',
            'dependencia_id'=>57,
            'nivel'=>5,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DECANATO DE FACULTAD DE DERECHO Y CIENCIAS POLÍTICAS',
            'dependencia_id'=>58,
            'nivel'=>5,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DECANATO DE FACULTAD DE EDUCACIÓN Y CIENCIAS DE LA COMUNICACIÓN',
            'dependencia_id'=>59,
            'nivel'=>5,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DECANATO DE FACULTAD DE ENFERMERIA',
            'dependencia_id'=>60,
            'nivel'=>5,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'DECANATO DE FACULTAD DE ESTOMATOLOGÍA',
            'dependencia_id'=>61,
            'nivel'=>5,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DECANATO DE FACULTAD DE FARMACIA Y BIOQUÍMICA',
            'dependencia_id'=>62,
            'nivel'=>5,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'DECANATO DE FACULTAD DE INGENIERÍA',
            'dependencia_id'=>63,
            'nivel'=>5,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'DECANATO DE FACULTAD DE INGENIERÍA QUÍMICA',
            'dependencia_id'=>64,
            'nivel'=>5,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'DECANATO DE FACULTAD DE MEDICINA ',
            'dependencia_id'=>65,
            'nivel'=>5,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE CIENCIA POLÍTICA Y GOBERNABILIDAD',
            'dependencia_id'=>71,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE DERECHO Y CIENCIAS POLÍTICAS',
            'dependencia_id'=>71,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE MICROBIOLOGÍA Y PARASITOLOGÍA',
            'dependencia_id'=>67,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE BIOLOGÍA PESQUERA',
            'dependencia_id'=>67,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE CIENCIAS BIOLÓGICAS',
            'dependencia_id'=>67,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE INGENIERÍA AGRONÓMICA',
            'dependencia_id'=>66,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE INGENIERÍA AGROINDUSTRIAL',
            'dependencia_id'=>66,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE INGENIERÍA ZOOTECNISTA',
            'dependencia_id'=>66,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE INGENIERÍA AGRÍCOLA',
            'dependencia_id'=>66,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE FARMACIA Y BIOQUÍMICA',
            'dependencia_id'=>75,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE INGENIERIA QUÍMICA',
            'dependencia_id'=>77,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE INGENIERIA AMBIENTAL',
            'dependencia_id'=>77,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE TURISMO',
            'dependencia_id'=>70,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE ANTROPOLOGÍA',
            'dependencia_id'=>70,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE TRABAJO SOCIAL',
            'dependencia_id'=>70,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE ARQUEOLOGÍA',
            'dependencia_id'=>70,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE HISTORIA',
            'dependencia_id'=>70,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE EDUCACIÓN PRIMARIA',
            'dependencia_id'=>72,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE EDUCACIÓN INICIAL',
            'dependencia_id'=>72,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE CIENCIAS DE LA COMUNICACIÓN',
            'dependencia_id'=>72,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE EDUCACIÓN SECUNDARIA ',
            'dependencia_id'=>72,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE ARQUITECTURA Y URBANISMO',
            'dependencia_id'=>76,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE INGENIERÍA INDUSTRIAL',
            'dependencia_id'=>76,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE INGENIERÍA DE MINAS',
            'dependencia_id'=>76,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE INGENIERÍA CIVIL',
            'dependencia_id'=>76,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE INGENIERÍA DE MATERIALES',
            'dependencia_id'=>76,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE INGENIERÍA DE SISTEMAS',
            'dependencia_id'=>76,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE INGENIERÍA MECÁNICA',
            'dependencia_id'=>76,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE INGENIERÍA MECATRÓNICA',
            'dependencia_id'=>76,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE INGENIERÍA METALÚRGICA',
            'dependencia_id'=>76,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE FÍSICA',
            'dependencia_id'=>69,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE INFORMÁTICA',
            'dependencia_id'=>69,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE ESTADÍSTICA',
            'dependencia_id'=>69,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE MATEMÁTICA',
            'dependencia_id'=>69,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE ESTOMATOLOGIA',
            'dependencia_id'=>74,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE ADMINISTRACIÓN',
            'dependencia_id'=>68,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE ECONOMÍA',
            'dependencia_id'=>68,
            'nivel'=>2,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE CONTABILIDAD Y FINANZAS',
            'dependencia_id'=>68,
            'nivel'=>2,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE MEDICINA',
            'dependencia_id'=>78,
            'nivel'=>2,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'ESCUELA PROFESIONAL DE ENFERMERIA',
            'dependencia_id'=>73,
            'nivel'=>2,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE DERECHO',
            'dependencia_id'=>71,
            'nivel'=>6,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE CIENCIAS BIOLOGICAS',
            'dependencia_id'=>67,
            'nivel'=>6,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE MICROBIOLOGIA Y PARASITOLOGIA',
            'dependencia_id'=>67,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE QUÍMICA BIOLOGICA Y FISIOLOGIA ANIMAL',
            'dependencia_id'=>67,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE PESQUERIA',
            'dependencia_id'=>67,
            'nivel'=>6,
            'estado' => 1,         
        ]);DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE CIENCIAS AGROINDUSTRIALES',
            'dependencia_id'=>66,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE AGRONOMIA Y ZOOTECNIA',
            'dependencia_id'=>66,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE FARMACOTECNIA',
            'dependencia_id'=>75,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE FARMACOLOGIA',
            'dependencia_id'=>75,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE BIOQUIMICA',
            'dependencia_id'=>75,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE INGENIERÍA AMBIENTAL',
            'dependencia_id'=>77,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE QUÍMICA',
            'dependencia_id'=>77,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE INGENIERIA QUÍMICA',
            'dependencia_id'=>77,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE ARQUEOLOGIA Y ANTROPOLOGIA',
            'dependencia_id'=>70,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE CIENCIAS SOCIALES',
            'dependencia_id'=>70,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE COMUNICACIÓN SOCIAL',
            'dependencia_id'=>72,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE IDIOMAS Y LINGÜISTICA',
            'dependencia_id'=>72,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE HISTORIA Y GEOGRAFIA',
            'dependencia_id'=>72,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE CIENCIAS DE LA EDUCACIÓN',
            'dependencia_id'=>72,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE FILOSOFIA Y ARTE',
            'dependencia_id'=>72,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE CIENCIAS PSICOLOGICAS',
            'dependencia_id'=>72,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE LENGUA NACIONAL Y LITERATURA',
            'dependencia_id'=>72,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE INGENIERIA DE MINAS',
            'dependencia_id'=>76,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE INGENIERIA INDUSTRIAL',
            'dependencia_id'=>76,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE INGENIERIA MECATRONICA',
            'dependencia_id'=>76,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE INGENIERIA DE MATERIALES',
            'dependencia_id'=>76,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE INGENIERIA DE METALURGICA',
            'dependencia_id'=>76,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE INGENIERIA DE SISTEMAS',
            'dependencia_id'=>76,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE INGENIERIA CIVIL,ARQUITECTURA Y URBANISMO',
            'dependencia_id'=>76,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE MECANICA Y ENERGIA',
            'dependencia_id'=>76,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE INFORMATICA',
            'dependencia_id'=>69,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE ESTADISTICA',
            'dependencia_id'=>69,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE FISICA',
            'dependencia_id'=>69,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE MATEMATICAS',
            'dependencia_id'=>69,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE ESTOMATOLOGIA',
            'dependencia_id'=>74,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE ECONOMIA',
            'dependencia_id'=>68,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE CONTABILIDAD Y FINANZAS',
            'dependencia_id'=>68,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE ADMINISTRACIÓN',
            'dependencia_id'=>68,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE CIRUGIA',
            'dependencia_id'=>78,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE MORFOLOGIA HUMANA',
            'dependencia_id'=>78,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE MEDICINA PREVENTIVA Y SALUD PUBLICA',
            'dependencia_id'=>78,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE FISIOLOGIA HUMANA',
            'dependencia_id'=>78,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE MEDICINA',
            'dependencia_id'=>78,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE PEDIATRIA',
            'dependencia_id'=>78,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE GINECOLOGIA Y OBSTETRICIA',
            'dependencia_id'=>78,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE CIENCIAS BASICAS MEDICAS',
            'dependencia_id'=>78,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE ENFERMERIA DE LA MUJER, NIÑO Y ADOLESCENTE',
            'dependencia_id'=>73,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE SALUD FAMILIAR Y COMUNITARIA',
            'dependencia_id'=>73,
            'nivel'=>6,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'DEPARTAMENTO ACADÉMICO DE SALUD DEL ADULTO',
            'dependencia_id'=>73,
            'nivel'=>6,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'COMISIÓN PERMAMENTE DE FISCALIZACIÓN',
            'dependencia_id'=>0,
            'nivel'=>7,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'ORGANO DE CONTROL INSTITUCIONAL',
            'dependencia_id'=>0,
            'nivel'=>7,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'TRIBUNAL DE HONOR UNIVERSITARIO',
            'dependencia_id'=>0,
            'nivel'=>7,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'DEFENSORIA UNIVERSITARIA',
            'dependencia_id'=>0,
            'nivel'=>7,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'CENTRO PRE UNIVERSITARIO-CEPUNT',
            'dependencia_id'=>51,
            'nivel'=>7,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'CENTRO DE IDIOMAS-CIDUNT',
            'dependencia_id'=>51,
            'nivel'=>7,
            'estado' => 1,         
        ]);
        DB::table('estructuras')->insert([
            'nombre' => 'CENTRO EDUCATIVO EXPERIMENTAL RAFAEL NARVAEZ CADENILLAS',
            'dependencia_id'=>51,
            'nivel'=>7,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'CENTRO DE EVENTOS ACADÉMICOS-CEAUNT',
            'dependencia_id'=>51,
            'nivel'=>7,
            'estado' => 1,         
        ]);  
        
        DB::table('estructuras')->insert([
            'nombre' => 'SEGUNDA ESPECIALIDAD EN TECNOLOGÍA EDUCATIVA',
            'dependencia_id'=>72,
            'nivel'=>7,
            'estado' => 1,         
        ]);  

        DB::table('estructuras')->insert([
            'nombre' => 'SEGUNDA ESPECIALIDAD EN MEDICINA',
            'dependencia_id'=>78,
            'nivel'=>7,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'CENTRO DE INFORMÁTICA DE CIENCIAS ECONÓMICAS - CICEC',
            'dependencia_id'=>68,
            'nivel'=>7,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'COMITÉ ELECTORAL UNIVERSITARIO',
            'dependencia_id'=>0,
            'nivel'=>7,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'COMPLEJO ARQUEOLÓGICO HUACAS DE MOCHE',
            'dependencia_id'=>70,
            'nivel'=>7,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'MUSEO DE ARQUEOLOGÍA',
            'dependencia_id'=>70,
            'nivel'=>7,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'FILIAL VALLE JEQUETEPEQUE',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'FILIAL HUAMACHUCO',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);

        DB::table('estructuras')->insert([
            'nombre' => 'FILIAL SANTIAGO DE CHUCO',
            'dependencia_id'=>1,
            'nivel'=>7,
            'estado' => 1,         
        ]);






       

    }
}
