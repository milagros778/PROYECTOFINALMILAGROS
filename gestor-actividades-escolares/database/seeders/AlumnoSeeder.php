<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alumno::create([
        'nombre_completo' => 'Lucía Ramírez',
        'curso' => '5º Primaria',
        'edad' => 10,
        ]);

        Alumno::create([
        'nombre_completo' => 'Carlos Pérez',
        'curso' => '6º Primaria',
        'edad' => 11,
        ]);


    }
}
