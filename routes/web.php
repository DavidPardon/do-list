<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Task;
use App\Livewire\Views\CreateTask;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Tareas', Task::class)->name('tareas');
Route::get('/Crear-tarea', CreateTask::class)->name('crear-tarea');