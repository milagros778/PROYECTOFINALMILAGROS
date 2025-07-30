@extends('layouts.app')


@section('title', 'Listado de Alumnos')


@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Alumnos</h1>
        <a href="{{ route('alumnos.create') }}" class="btn btn-primary">Agregar Alumno</a>
    </div>

  @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($alumnos->isEmpty())
        <div class="alert alert-info">No hay alumnos registrados.</div>
    @else

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
   <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>Edad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($alumnos as $alumno)
                    <tr>
                        <td>{{ $alumno->id }}</td>
                        <td>{{ $alumno->nombre }}</td>
                        <td>{{ $alumno->email }}</td>
                        <td>{{ $alumno->edad }}</td>
                        <td>

      <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-sm btn-warning">Editar</a>

                            <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Deseas eliminar este alumno?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>

                        </td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>

    @endif
@endsection