<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CurriculoController;

Route::get('/', [CurriculoController::class, 'index']);
Route::post('/enviar', [CurriculoController::class, 'store'])->name('curriculo.enviar');