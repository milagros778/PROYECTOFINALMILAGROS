<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Actividad;
use App\Models\Alumno;
use App\Models\Inscripcion;
use App\Http\Controllers\API\AlumnoApiController;
use App\Http\Controllers\API\ActividadApiController;

// Ruta básica de prueba (opcional)

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
return $request->user();
});


// Obtener todas las actividades

Route::get('/actividades', fn() => Actividad::all());

// Obtener todos los alumnos

Route::get('/alumnos', fn() => Alumno::all());

// Crear alumno vía API (controlador dedicado)

Route::post('/alumnos', [AlumnoApiController::class, 'store']);
// Obtener todas las inscripciones

Route::get('/inscripciones', fn() => Inscripcion::all());
