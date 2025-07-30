@extends('layouts.app')

@section('title', 'Editar Alumno')

@section('content')

<h1>Editar Alumno</h1>
@if ($errors->any())

<div class="alert alert-danger">
<strong>¡Ups!</strong> Hay errores en el formulario:<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>

@endforeach

</ul>
</div>

@endif

<form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
@csrf

@method('PUT')
<div class="mb-3">
<label for="nombre" class="form-label">Nombre completo</label>
<input type="text" name="nombre" class="form-control" value="{{
old('nombre', $alumno->nombre) }}" required>
</div>

<div class="mb-3">
<label for="email" class="form-label">Correo electrónico</label>
<input type="email" name="email" class="form-control" value="{{ old('email',
$alumno->email) }}" required>
</div>
<div class="mb-3">
<label for="edad" class="form-label">Edad</label>
<input type="number" name="edad" class="form-control" value="{{ old('edad',
$alumno->edad) }}" required min="1">
</div>
<button type="submit" class="btn btn-primary">Actualizar Alumno</button>
<a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Cancelar</a>

</form>