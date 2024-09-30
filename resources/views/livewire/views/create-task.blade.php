<div class="flex justify-center items-center h-screen sm:ml-64">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4">Crear Nueva Tarea</h1>

        <!-- Mostrar mensaje de éxito -->
        @if (session()->has('message'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('message') }}
            </div>
        @endif

        <!-- Formulario para crear la tarea -->
        <form wire:submit.prevent="saveTask">
            <!-- Título -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold">Título</label>
                <input type="text" id="title" wire:model="title" 
                       class="w-full p-2 border border-gray-300 rounded" 
                       placeholder="Título de la tarea">
                @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <!-- Descripción -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold">Descripción</label>
                <textarea id="description" wire:model="description" 
                          class="w-full p-2 border border-gray-300 rounded" 
                          placeholder="Descripción de la tarea (opcional)"></textarea>
                @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <!-- Prioridad -->
            <div class="mb-4">
                <label for="priority" class="block text-gray-700 font-bold">Prioridad</label>
                <select id="priority" wire:model="priority" 
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
                <input type="date" id="due_date" wire:model="due_date" 
                       class="w-full p-2 border border-gray-300 rounded">
                @error('due_date') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <!-- Botón para guardar -->
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Crear Tarea
            </button>
        </form>
    </div>
</div>