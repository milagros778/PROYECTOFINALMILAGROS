<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actividad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ActividadSeeder extends Seeder

{

public function run(): void


{

Actividad::create([
'nombre' => 'Robótica',
'descripcion' => 'Actividades de robótica para niños',
'dia_semana' => 'Lunes',
'horario' => '16:00 - 17:30',
]);

Actividad::create([
'nombre' => 'Pintura',
'descripcion' => 'Clases de pintura creativa',
'dia_semana' => 'Miércoles',
'horario' => '17:00 - 18:30',
]);

}
}
