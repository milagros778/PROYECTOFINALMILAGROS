@extends('layouts.app')


@section('title', 'Listado de Actividades')


@section('content')


    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Actividades</h1>
        <a href="{{ route('actividades.create') }}" class="btn btn-primary">Crear Nueva Actividad</a>
    </div>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif  

    @if ($actividades->isEmpty())
        <div class="alert alert-info">No hay actividades registradas.</div>

@else
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($actividades as $actividad)

                    <tr>

                        <td>{{ $actividad->id }}</td>
                        <td>{{ $actividad->titulo }}</td>
                        <td>{{ $actividad->descripcion }}</td>
      <td>{{ \Carbon\Carbon::parse($actividad->fecha)->format('d/m/Y') }}</td>

                        <td>

                            <a href="{{ route('actividades.edit', $actividad->id) }}" class="btn btn-sm btn-warning">Editar</a>


                            <form action="{{ route('actividades.destroy', $actividad->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Estás seguro de eliminar esta actividad?');">
                              
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