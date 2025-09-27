<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstadoController;

Route::get('/', [EstadoController::class, 'index'])->name('estados.index');
Route::get('/estados', [EstadoController::class, 'index'])->name('estados.index');
Route::get('/estados/{estado}/municipios', [EstadoController::class, 'municipios'])->name('estados.municipios');
