<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\InscripcionController;

// Página de inicio (opcional)
Route::get('/', function () {
return redirect()->route('actividades.index');
});

// Rutas para actividades

Route::resource('actividades', ActividadController::class);
// Rutas para alumnos

Route::resource('alumnos', AlumnoController::class);

// Rutas para inscripciones (sólo crear)

Route::get('inscripciones/create', [InscripcionController::class, 'create'])->name('inscripciones.create');

Route::post('inscripciones', [InscripcionController::class, 'store'])->name('inscripciones.store');
