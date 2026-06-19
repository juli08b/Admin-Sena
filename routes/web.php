<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TrainingCentersController;
use App\Http\Controllers\ComputersController;
use App\Http\Controllers\AreasController;

// Estas son las rutas para Centros de Formacion
Route::get('training-center/create', [TrainingCentersController::class, 'create'])->name('training_center.create');
Route::post('training-center/store', [TrainingCentersController::class, 'store'])->name('training_center.store');

// las rutas para Computadores 
Route::get('computer/create', [ComputersController::class, 'create'])->name('computer.create');
Route::post('computer/store', [ComputersController::class, 'store'])->name('computer.store');

// las rutas para areas 
Route::get('area/create', [AreasController::class, 'create'])->name('area.create');
Route::post('area/store', [AreasController::class, 'store'])->name('area.store');
