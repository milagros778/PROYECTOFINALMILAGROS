<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
// Mostrar listado de actividades
public function index()

{
$actividades = Actividad::all();
return view('actividades.index', compact('actividades'));
}

// Mostrar formulario para crear nueva actividad

public function create()
{
return view('actividades.create');
}

// Guardar nueva actividad en la base de datos

public function store(Request $request)
    {
$request->validate([
'nombre' => 'required|string|max:255',
'descripcion' => 'required|string',
'dia_semana' => 'required|string',
'horario' => 'required|string',
]);

Actividad::create($request->all());

return redirect()->route('actividades.index')->with('success', 'Actividad creada correctamente');
    }
// Mostrar formulario de edición

public function edit($id)
{
$actividad = Actividad::findOrFail($id);
return view('actividades.edit', compact('actividad'));
}

// Actualizar actividad

public function update(Request $request, $id)
{
$request->validate([
    
'nombre' => 'required|string|max:255',
'descripcion' => 'required|string',
'dia_semana' => 'required|string',
'horario' => 'required|string',
]);
$actividad = Actividad::findOrFail($id);
$actividad->update($request->all());
return redirect()->route('actividades.index')->with('success', 'Actividad actualizada
correctamente');
}

// Eliminar actividad
public function destroy($id)
{
$actividad = Actividad::findOrFail($id);
$actividad->delete();
return redirect()->route('actividades.index')->with('success', 'Actividad eliminada');
}

// API pública: devolver todas las actividades en JSON
public function apiIndex()
{
return response()->json(Actividad::all());
}

}


        