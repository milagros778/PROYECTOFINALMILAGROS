@extends('layouts.app')


@section('title', 'Crear Actividad')


@section('content')

    <h1>Crear Nueva Actividad</h1>

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

    <!-- Formulario de creación -->

    <form action="{{ route('actividades.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" value="{{ old('titulo') }}" required>
        </div>

        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ old('fecha') }}" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar Actividad</button>
        <a href="{{ route('actividades.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection