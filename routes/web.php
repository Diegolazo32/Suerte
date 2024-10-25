<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfesorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.logIn');
Route::get('/logout', [LoginController::class, 'logOut'])->name('login.logOut');
Route::post('/logout', [LoginController::class, 'logOut'])->name('login.logOut');

Route::middleware('auth')->group(function () {
    Route::controller(AlumnoController::class, 'alumno')->group(function () {
        Route::get('/alumnos', 'index')->name('alumno.index');
        Route::get('/alumnos/{id}', 'getById')->name('alumno.getById');
        Route::get('/grados/alumnos/{id}', 'getAlumnosGrado')->name('alumno.getAlumnosGrado');
    });

    Route::controller(ProfesorController::class, 'profesor')->group(function () {
        //Route::get('/profesores', 'index')->name('profesor.index');
        //Route::get('/profesores/{id}', 'getById')->name('profesor.getById');
        Route::get('/profesores/{id}/alumnos', 'getAlumnosByProfesor')->name('profesor.getAlumnosByProfesor');
    });
});
