@extends('layouts.app')


@section('title', 'Agregar Alumno')


@section('content')

    <h1>Agregar Nuevo Alumno</h1>

    <!-- Mostrar errores de validación -->
     
        <div class="alert alert-danger">
            <strong>¡Ups!</strong> Hay errores en el formulario:<br><br>
            <ul>
   @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>
                @endforeach

            </ul>
        </div>

    @endif

    <!-- Formulario -->

    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
  <label for="nombre" class="form-label">Nombre completo</label>
            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div class="mb-3">
   <label for="edad" class="form-label">Edad</label>
            <input type="number" name="edad" class="form-control" value="{{ old('edad') }}" required min="1">
        </div>

        <button type="submit" class="btn btn-success">Guardar Alumno</button>
        <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
    
@endsection