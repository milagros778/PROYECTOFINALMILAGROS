<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Actividad;
use App\Models\Inscripcion;
use Illuminate\Http\Request;

class InscripcionController extends Controller

{
// Mostrar formulario para inscribir alumno en actividad

public function create()
{
$alumnos = Alumno::all();
$actividades = Actividad::all();
return view('inscripciones.create', compact('alumnos', 'actividades'));
}

// Guardar la inscripción

public function store(Request $request)
{
$request->validate([
'alumno_id' => 'required|exists:alumnos,id',
'actividad_id' => 'required|exists:actividades,id',
]);

// Evitar inscripciones duplicadas
$yaInscrito = Inscripcion::where('alumno_id', $request->alumno_id)
->where('actividad_id', $request->actividad_id)
->exists();

if ($yaInscrito) {

return redirect()->back()->with('error', 'El alumno ya está inscrito en esta
actividad.');
}

Inscripcion::create([
'alumno_id' => $request->alumno_id,
'actividad_id' => $request->actividad_id,
]);
return redirect()->back()->with('success', 'Inscripción realizada con éxito');

}

}
