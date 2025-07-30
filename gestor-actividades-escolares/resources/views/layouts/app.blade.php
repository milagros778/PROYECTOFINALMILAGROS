<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Actividades Escolares')</title>


    <!-- CSS de Bootstrap (opcional pero común) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS personalizado de Laravel (si existe) -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Barra de navegación -->
     
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}">Actividades Escolares</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('actividades.index') }}">Ver Actividades</a>
                    </li>
                    <li class="nav-item">
                        
                        <a class="nav-link" href="{{ route('actividades.create') }}">Nueva Actividad</a>
                    </li>
             </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal que cambia según la vista -->

    <div class="container">
        @yield('content')
    </div>

    <!-- Scripts de Bootstrap (opcional) -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>