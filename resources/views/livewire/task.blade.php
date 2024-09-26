@extends('layouts.app')

@section('content')
<div class="p-4 sm:ml-64">
  

    <div class=" justify-center items-center mx-auto py-6">
    @if ($response= Session::get('success'))

        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ $response }}
        </div>
   @endif
    </div>
        <h2 class="text-3xl font-bold tracking-tight mb-6">Mis Tareas</h2>
        <div class="bg-gray-200 shadow-md rounded-lg">
            <!-- Componente de tabla de tareas -->
            <!-- El componente TaskTable se encarga de renderizar cada tarea en una fila de la tabla -->
            <livewire:task-table />
            <style>
                #table-table
                {
                    width: 95% !important;
                    overflow-x: auto;
                    margin-left: 2.5%;
                }
            </style>
        </div>
    </div>
    
</div>

@endsection