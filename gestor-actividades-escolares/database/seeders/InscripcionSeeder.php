<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inscripcion;

class InscripcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inscripcion::create([
            'alumno_id' => 1,
            'actividad_id' => 1,
            ]);
        Inscripcion::create([
            'alumno_id' => 2,
            'actividad_id' => 2,
]);

    }
}
