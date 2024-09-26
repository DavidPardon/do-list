@extends('layouts.app')

@section('content')
<div class="p-4 sm:ml-64">
    <h1 class="text-2xl font-bold mb-4">Editar Tarea</h1>

    @if (session()->has('message'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form >
        <!-- Título -->
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold">Título{{$task}}</label>
            <input type="text" id="title" wire:model="edittask.title" 
                   class="w-full p-2 border border-gray-300 rounded" 
                   placeholder="Título de la tarea">
            @error('edittask.title') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Descripción -->
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold">Descripción</label>
            <textarea id="description" wire:model="edittask.description" 
                      class="w-full p-2 border border-gray-300 rounded" 
                      placeholder="Descripción de la tarea"></textarea>
            @error('edittask.description') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Prioridad -->
        <div class="mb-4">
            <label for="priority" class="block text-gray-700 font-bold">Prioridad</label>
            <select id="priority" wire:model="edittask.priority" 
                    class="w-full p-2 border border-gray-300 rounded">
                <option value="baja">Baja</option>
                <option value="media">Media</option>
                <option value="alta">Alta</option>
            </select>
            @error('priority') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Fecha de Vencimiento -->
        <div class="mb-4">
            <label for="due_date" class="block text-gray-700 font-bold">Fecha de Vencimiento</label>
            <input type="date" id="due_date" wire:model="edittask.due_date" 
                   class="w-full p-2 border border-gray-300 rounded">
            @error('due_date') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Botón de Actualizar -->
        <button type="submit" wire:click='updated' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Actualizar Tarea
        </button>
    </form>
</div>
@endsection