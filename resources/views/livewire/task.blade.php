@extends('layouts.app')

@section('content')
<div class="p-4 sm:ml-64">

    <div class="container justify-center items-center mx-auto py-6">
    
        <h2 class="text-3xl font-bold tracking-tight mb-6">Tareas Pendientes</h2>
        <button>Agregar tarea</button>
        <div class="bg-gray-200 shadow-md rounded-lg">
            <!-- Componente de tabla de tareas -->
            <!-- El componente TaskTable se encarga de renderizar cada tarea en una fila de la tabla -->
            <livewire:task-table />
    
        </div>
    </div>
</div>

@endsection