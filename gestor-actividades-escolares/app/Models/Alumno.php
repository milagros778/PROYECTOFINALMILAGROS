<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Alumno extends Model
{
    protected $table = 'alumnos';
    protected $fillable = ['nombre_completo', 'curso', 'edad'];
    
    public function actividades()
    {
    return $this->belongsToMany(Actividad::class, 'inscripciones');

    }
}