<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesorController;
use App\Models\Curso;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
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