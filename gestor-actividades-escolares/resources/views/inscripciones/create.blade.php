@extends('layouts.app')

@section('title', 'Inscribir Alumno')

@section('content')

<h1>Inscribir Alumno en Actividad</h1>

@if ($errors->any())
<div class="alert alert-danger">
<ul>

@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach

</ul>
</div>

@endif

<form action="{{ route('inscripciones.store') }}" method="POST">

@csrf

<div class="mb-3">
<label for="alumno_id" class="form-label">Alumno</label>
<select name="alumno_id" class="form-select" required>
<option value="">Seleccione un alumno</option>

@foreach ($alumnos as $alumno)
<option value="{{ $alumno->id }}">{{ $alumno->nombre }}</option>

@endforeach

</select>
</div>
<div class="mb-3">
<label for="actividad_id" class="form-label">Actividad</label>
<select name="actividad_id" class="form-select" required>
<option value="">Seleccione una actividad</option>

@foreach ($actividades as $actividad)
<option value="{{ $actividad->id }}">{{ $actividad->nombre }}</option>

@endforeach

</select>
</div>
<button type="submit" class="btn btn-success">Inscribir</button>
<a href="{{ route('actividades.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection