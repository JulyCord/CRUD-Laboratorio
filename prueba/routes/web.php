<?php

use App\Http\Controllers\PacientesController;
use App\Http\Controllers\PruebasmedicasController;
use App\Http\Controllers\ResultadosController;
use Illuminate\Support\Facades\Route;

//Pacientes

Route::get('/', [PacientesController::class, 'index'])->name('pacientes.index');
Route::get('/create', [PacientesController::class, 'create'])->name('pacientes.create');
Route::post('/store', [PacientesController::class, 'store'])->name('pacientes.store');
Route::get('/edit/{id_paciente}', [PacientesController::class, 'edit'])->name('pacientes.edit');
Route::put('/update/{id_paciente}', [PacientesController::class, 'update'])->name('pacientes.update');
Route::get('/show/{id_paciente}', [PacientesController::class, 'show'])->name('pacientes.show');
Route::delete('/destroy/{id_paciente}', [PacientesController::class, 'destroy'])->name('pacientes.destroy');

//Pruebas Medicas

Route::get('/2', [PruebasmedicasController::class, 'index'])->name('pruebasm.index');
Route::get('/create2', [PruebasmedicasController::class, 'create'])->name('pruebasm.create');
Route::post('/store2', [PruebasmedicasController::class, 'store'])->name('pruebasm.store');
Route::get('/edit2/{id_prueba}', [PruebasmedicasController::class, 'edit'])->name('pruebasm.edit');
Route::put('/update2/{id_prueba}', [PruebasmedicasController::class, 'update'])->name('pruebasm.update');
Route::get('/show2/{id_prueba}', [PruebasmedicasController::class, 'show'])->name('pruebasm.show');
Route::delete('/destroy2/{id_prueba}', [PruebasmedicasController::class, 'destroy'])->name('pruebasm.destroy');

//Resultados

Route::get('/3', [ResultadosController::class, 'index'])->name('resultados.index');
Route::get('/create3', [ResultadosController::class, 'create'])->name('resultados.create');
Route::post('/store3', [ResultadosController::class, 'store'])->name('resultados.store');
Route::get('/edit3/{id_resultado}', [ResultadosController::class, 'edit'])->name('resultados.edit');
Route::put('/update3/{id_resultado}', [ResultadosController::class, 'update'])->name('resultados.update');
Route::get('/show3/{id_resultado}', [ResultadosController::class, 'show'])->name('resultados.show');
Route::delete('/destroy3/{id_resultado}', [ResultadosController::class, 'destroy'])->name('resultados.destroy');