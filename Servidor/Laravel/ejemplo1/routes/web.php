<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PrimerController;

/*
Prueba de rutas
*/

Route::get('/', function () {
    return view('hola');
});
Route::get('/saludar/{nombre?}', function ($nombre = 'sin nombre') {
    return 'hola:' . $nombre;
});
/////Para probar get/post con formularios///
//Un ejemplo //
Route::get('/entrada', function () {
    return view('formulario.entrada');
});
Route::post('/entrada', function () {
    return view('formulario.mostrar');
    /*Otro ejemplo usando un metodo en el controller que cargue un objeto request*/
    Route::get(
        '/entrada0',
        function () {
            return view('formulario.entrada0');
        }
    );
    Route::post('/entrada0', [PrimerController::class, 'recibirPost']);
});
//////////a apartir de aquí para gestionar la tabla contactos

/*una prueba sin usar el controller
Route::get('/otrosContactos', function () {
return view('contactos.otralista');
});*/
Route::get('/contactos', [ContactoController::class, 'index']);
Route::get('/contactos/crear', [ContactoController::class, 'create']);
Route::post('/contactos/crear', [ContactoController::class, 'store']);
Route::get('/contactos/ver/{id}', [ContactoController::class, 'show']);
Route::get('/contactos/editar/{id}', [ContactoController::class, 'edit']);
Route::post('/contactos/editar/{id}', [ContactoController::class, 'update']);
Route::get('/contactos/borrar/{id}', [ContactoController::class, 'destroy']);