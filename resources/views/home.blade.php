<!-- Vista del componente de Home -->
@extends('layouts.app')

@section('content')
    <!-- Componente de navegación -->
    <livewire:layout.nav-bar />
    <!-- Componente de banner-->
    <livewire:layout.banner />

    <div class="container justify-center items-center mx-auto py-6">
        <h2 class="text-3xl font-bold tracking-tight mb-6">Tareas Pendientes</h2>
        <div class="bg-gray-200 shadow-md rounded-lg">
            <!-- Componente de tabla de tareas -->
            <!-- El componente TaskTable se encarga de renderizar cada tarea en una fila de la tabla -->
            <livewire:task-table />

        </div>
    </div>
@endsection
