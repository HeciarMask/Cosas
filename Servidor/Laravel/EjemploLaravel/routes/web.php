<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\IdiomaController;
use App\Http\Controllers\DepartamentoController;

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
    return view('principal');
});
Route::get('/empleados',[EmpleadoController::class, 'index'])->name('empleados.index');
Route::get('/empleados/crear', [EmpleadoController::class, 'create'])->name('empleados.crear');

Route::post('/empleados/crear', [EmpleadoController::class, 'store'])->name('empleados.crear');
Route::get('/empleados/borrar/{id}', [EmpleadoController::class, 'destroy']);

