### Gestor de actividades escolares.

Este proyecto es una aplicación web desarrollada con Laravel que permite gestionar
actividades extraescolares como Robótica, Pintura, Inglés o Ajedrez, y administrar qué
alumnos están inscritos en cada una.
###Funcionalidades principales
 Registro de actividades con título, descripción, fecha, día y horario.
 Alta, edición y eliminación de alumnos.
 Inscripción de alumnos a actividades.
 Listado de actividades con búsqueda por nombre.
 API REST para consultar alumnos, actividades e inscripciones.
 Vistas Blade para la interfaz web.
 Uso de Eloquent ORM y relaciones muchos a muchos.


### Tecnologías usadas.

 PHP 8.x
 Laravel 10
 MySQL / MariaDB
 Blade (para vistas)
 Eloquent ORM
 Bootstrap 5 (interfaz)
 Postman / Thunder Client (para probar API)
###Estructura del proyecto
El proyecto sigue el patrón MVC:
 app/Models → Modelos de Eloquent
 app/Http/Controllers → Controladores web y API
 resources/views → Vistas Blade
 routes/web.php → Rutas para la interfaz
 routes/api.php → Rutas para la API
 database/seeders → Datos iniciales (actividades, alumnos, inscripciones)

### lo que aprendí.
 A conectar Laravel con bases de datos y trabajar con relaciones.
 Crear formularios y validaciones con Blade.
 Generar utas RESTful y controladores resource.
 Utilizar Postman y Thunder Client para probar APIs.
 Organizar un proyecto completo siguiendo buenas prácticas.


### como lo hice.
1. Clona el repositorio.
2. Ejecuta `composer install`.
3. Configura el archivo `.env` (puedes copiar `.env.example`).
4. Ejecuta `php artisan migrate --seed` para crear y poblar la base de datos.
5. Inicia el servidor con `php artisan serve`.