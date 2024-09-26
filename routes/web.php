<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Task;
use App\Livewire\Views\CreateTask;
use App\Livewire\Views\EditTask;
use App\Livewire\Views\FormEditTask;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tareas', Task::class)->name('tareas');
Route::get('/tarea/crear', CreateTask::class)->name('crear.tarea');
Route::get('/tarea/{task}/editar', FormEditTask::class)->name('editar.tarea');
