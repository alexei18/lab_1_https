<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;

// Ruta pentru pagina principală
Route::get('/', [HomeController::class, 'index'])->name('home');

// Ruta pentru pagina „Despre noi”
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Definire rute de resurse pentru sarcini
Route::resource('tasks', TaskController::class);

// Edit Task (show form)
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

// Update Task (submit form)
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
