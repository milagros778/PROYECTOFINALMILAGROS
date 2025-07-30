@extends('layouts.app')


@section('title', 'Editar Actividad')


@section('content')

    <h1>Editar Actividad</h1>

    <!-- Mostrar errores de validación -->

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>¡Ups!</strong> Hay algunos problemas con tu entrada.<br><br>
            <ul>

                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
          </ul>
          
        </div>
    @endif

    <!-- Formulario de edición -->
    <form action="{{ route('actividades.update', $actividad->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Método HTTP para actualizar -->

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" value="{{ old('titulo', $actividad->titulo) }}" required>
        </div>

        <div class="mb-3">
  <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control" rows="3" required>{{ old('descripcion', $actividad->descripcion) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ old('fecha', $actividad->fecha) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Actividad</button>
        <a href="{{ route('actividades.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection