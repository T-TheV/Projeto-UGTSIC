<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CurriculoController;

Route::get('/', [CurriculoController::class, 'index'])->middleware('auth')->name('Index');
Route::post('/enviar', [CurriculoController::class, 'store'])->name('curriculo.enviar');

Route::get('/registro', [RegistroController::class, 'index'])->name('registro');
Route::post('/registro', [RegistroController::class, 'store'])->name('registrar.usuario');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin/curriculo', [AdminController::class, 'index'])->name('admin.curriculo')->middleware('auth');
Route::post('/admin/curriculo/{id}/aprovar', [AdminController::class, 'aprovar'])->name('curriculo.aprovar');
Route::post('/admin/curriculo/{id}/recusar', [AdminController::class, 'recusar'])->name('curriculo.recusar');

Route::get('/curriculo', [CurriculoController::class, 'index'])->name('curriculo.formulario');
Route::post('/curriculo', [CurriculoController::class, 'store'])->name('curriculo.enviar');
Route::post('/curriculo/{id}', [CurriculoController::class, 'update'])->name('curriculo.atualizar');