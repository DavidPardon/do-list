<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Task;
use App\Livewire\Views\CreateTask;
use App\Livewire\Views\TaskEdit;
use App\Livewire\Views\Home;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
Route::get('/', Home::class)->middleware('auth','verified');

Route::get('/home', Home::class)->middleware('auth','verified')->name('home');;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//rutas de tareas
Route::get('/tareas', Task::class)->middleware('auth','verified')->name('tareas');
Route::get( '/tarea/crear', CreateTask::class)->middleware('auth','verified')->name('crear-tarea');
Route::get('/tarea/{task}/editar', TaskEdit::class)->middleware('auth','verified')->name('editar.tarea');


require __DIR__.'/auth.php';
