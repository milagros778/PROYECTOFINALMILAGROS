<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function index(){

        return response()->json([
            'status' => 'ok',
            'actividades' => Actividad::all()
        ]);
    }
}
