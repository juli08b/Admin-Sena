<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TrainingCentersController;
use App\Http\Controllers\ComputersController;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ApprenticesController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\CourseTeachersController;

// Estas son las rutas para Centros de Formacion
Route::get('training-center/create', [TrainingCentersController::class, 'create'])->name('training_center.create');
Route::post('training-center/store', [TrainingCentersController::class, 'store'])->name('training_center.store');
Route::get('training-center/{training_center}', [TrainingCentersController::class, 'show'])->name('training_center.show');

// las rutas para Computadores 
Route::get('computer/create', [ComputersController::class, 'create'])->name('computer.create');
Route::post('computer/store', [ComputersController::class, 'store'])->name('computer.store');
Route::get('computer/{computer}', [ComputersController::class, 'show'])->name('computer.show');

// las rutas para areas 
Route::get('area/create', [AreasController::class, 'create'])->name('area.create');
Route::post('area/store', [AreasController::class, 'store'])->name('area.store');
Route::get('area/{area}', [AreasController::class, 'show'])->name('area.show');

// las rutas para cursos
Route::get('course/create', [CoursesController::class, 'create'])->name('course.create');
Route::post('course/store', [CoursesController::class, 'store'])->name('course.store');
Route::get('course/{course}', [CoursesController::class, 'show'])->name('course.show');

// las rutas para aprendices
Route::get('apprentice/create', [ApprenticesController::class, 'create'])->name('apprentice.create');
Route::post('apprentice/store', [ApprenticesController::class, 'store'])->name('apprentice.store');
Route::get('apprentice/{apprentice}', [ApprenticesController::class, 'show'])->name('apprentice.show');

// las rutas para instructores
Route::get('teacher/create', [TeachersController::class, 'create'])->name('teacher.create');
Route::post('teacher/store', [TeachersController::class, 'store'])->name('teacher.store');
Route::get('teacher/{teacher}', [TeachersController::class, 'show'])->name('teacher.show');

//Course_Teacher
Route::get('course_teacher/create', [CourseTeachersController::class, 'create'])->name('course_teacher.create');
Route::post('course_teacher/store', [CourseTeachersController::class, 'store'])->name('course_teacher.store');
Route::get('course_teacher/{course_teacher}', [CourseTeachersController::class, 'show'])->name('course_teacher.show');