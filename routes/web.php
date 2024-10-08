<?php

use App\Http\Controllers\ContactoController;
use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto/{tipo_usuario?}', [ContactoController::class, 'formularioContacto']);
Route::post('/guardar-formulario', [ContactoController::class, 'guardarFormulario']);
Route::get('/mensaje', [ContactoController::class, 'listado']);