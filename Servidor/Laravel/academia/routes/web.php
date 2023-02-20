<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AlumnoController;
//use App\Models\Curso; para el pruebawhere
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middlewa re group. Now create something great!
|
*/

Route::get('/', function () {
    return view('hola');
});
Route::get('/profesores',[ProfesorController::class,'index'])
->name('profesores.index');
Route::get('/profesores/crear',[ProfesorController::class,'create']);
Route::post('/profesores/crear',[ProfesorController::class,'store']);
Route::get('/profesores/ver/{id}',[ProfesorController::class,'show']);
Route::get('/profesores/editar/{id}',[ProfesorController::class,'edit']);
Route::post('/profesores/editar/{id}',[ProfesorController::class,'update']);
Route::get('/profesores/eliminar/{id}',[ProfesorController::class,'destroy']);
Route::get('pruebasWhere', function(){
    $cursos = Curso::where('nivel','Basico')->get();
    dd($cursos);

});
/**** **************/

Route::get('/cursos',[CursoController::class, 'index'])->name('cursos.index');
Route::get('/cursos/crear', [CursoController::class, 'create'])->name('cursos.create');
Route::get('/cursos/ver/{id}', [CursoController::class, 'show'])->name('cursos.show');
Route::post('/cursos',  [CursoController::class, 'store'])->name('cursos.store');
Route::get('/cursos/editar/{id}', [CursoController::class, 'edit'])->name('cursos.edit');
Route::post('/cursos/editar/{id}', [CursoController::class, 'update'])->name('cursos.update');
Route::get('/cursos/eliminar/{id}',[CursoController::class, 'destroy'])->name('cursos.destroy');
/////////////////////////
Route::get('/alumnos',[AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/alumnos/crear', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos',  [AlumnoController::class, 'store'])->name('alumnos.store');
Route::get('/alumnos/editar/{id}', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::put('/alumnos/{id}', [AlumnoController::class, 'update'])->name('alumnos.update');
Route::get('/alumnos/eliminar/{id}',[AlumnoController::class, 'destroy'])->name('alumnos.destroy');
Route::get('/alumnos/ver/{id}',[AlumnoController::class, 'show'])->name('alumnos.show');
Route::put('/alumnos/editar/{id}',[AlumnoController::class, 'update']);