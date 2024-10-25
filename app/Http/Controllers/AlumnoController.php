<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        return Alumno::all();
    }

    public function getById($id)
    {
        return Alumno::find($id);
    }

    public function getAlumnosGrado($id)
    {

        $alumnos = Alumno::where('grado', $id)->get();

        if ($alumnos->isEmpty()) {
            return response()->json(['message' => 'No hay alumnos en este grado'], 404);
        }

        return $alumnos;
    }
}
