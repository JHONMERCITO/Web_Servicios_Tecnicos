<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\SobreNosotrosController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios');
Route::get('/galeria', [GaleriaController::class, 'index'])->name('galeria');
Route::get('/sobre-nosotros', [SobreNosotrosController::class, 'index'])->name('sobre-nosotros');
Route::get('/soy-cliente', [ClienteController::class, 'index'])->name('soy-cliente');
Route::get('/soy-empleado', [EmpleadoController::class, 'index'])->name('soy-empleado');
Route::post('/registrar-cliente', [ClienteController::class, 'registrar'])->name('cliente.registrar');
