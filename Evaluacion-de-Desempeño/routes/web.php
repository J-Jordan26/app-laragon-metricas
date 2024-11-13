<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\departamentoController;
use App\Http\Controllers\empleadoController;
use App\Http\Controllers\evaluacciondetalleController;
use App\Http\Controllers\evaluacioneController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\metricaController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
//Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('categorias', categoriaController::class);
    Route::resource('departamentos', departamentoController::class);
    Route::resource('empleados', empleadoController::class);
    Route::resource('evaluacciondetalles', evaluacciondetalleController::class);
    Route::resource('evaluaciones', evaluacioneController::class);
    Route::resource('puestos', PuestoController::class);
    Route::resource('metricas', metricaController::class);
});
