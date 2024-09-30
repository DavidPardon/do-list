<div class="flex justify-center items-center h-screen sm:ml-64">
    <div class=" justify-center items-center mx-auto py-6">
        @if (session()->has('message'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif
    <div class="bg-gray-200 shadow-md rounded-lg">
            
            <!-- Componente de tabla de tareas -->
            <!-- El componente TaskTable se encarga de renderizar cada tarea en una fila de la tabla -->
            <livewire:task-table />
            <style>
                #table-table {
                    width: 95% !important;
                    overflow-x: auto;
                    margin-left: 2.5%;
                }
            </style>
        </div>
    </div>

</div>
