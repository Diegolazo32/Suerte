<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Alumno;
use App\Models\AlumnoMateria;
use App\Models\ProfesorMateria;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function getAlumnosByProfesor($id)
    {
        $alumnos = [];
        $materias = ProfesorMateria::where('profesor', $id)->get();
        foreach ($materias as $materia) {
            $alumnosMateria = AlumnoMateria::where('materia', $materia->materia)->get();
            foreach ($alumnosMateria as $alumnoMateria) {
                $alumno = Alumno::find($alumnoMateria->alumno);
                $alumnos[] = $alumno;
            }
        }
        return $alumnos;
    }
}
