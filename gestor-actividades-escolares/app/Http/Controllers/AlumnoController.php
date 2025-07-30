<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
// Mostrar listado de alumnos

public function index()
{
$alumnos = Alumno::all();
return view('alumnos.index', compact('alumnos'));
}

// Mostrar formulario de creación

public function create()
{
return view('alumnos.create');
}
// Guardar nuevo alumno
public function store(Request $request)
{

$request->validate([
'nombre_completo' => 'required|string|max:255',
'curso' => 'required|string|max:50',
'edad' => 'required|integer|min:1|max:99',
]);

Alumno::create($request->all());
return redirect()->route('alumnos.index')->with('success', 'Alumno creado
correctamente');

}
// Mostrar formulario de edición

public function edit($id)
{
$alumno = Alumno::findOrFail($id);
return view('alumnos.edit', compact('alumno'));
}

// Actualizar alumno existente
public function update(Request $request, $id)
{
$request->validate([
'nombre_completo' => 'required|string|max:255',
'curso' => 'required|string|max:50',
'edad' => 'required|integer|min:1|max:99',
]);

$alumno = Alumno::findOrFail($id);

$alumno->update($request->all());
return redirect()->route('alumnos.index')->with('success', 'Alumno actualizado
correctamente');
}

// Eliminar alumno

{
$alumno = Alumno::findOrFail($id);

$alumno->delete();

return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado
correctamente');
}

}

