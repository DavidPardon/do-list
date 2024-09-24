<div>
    <div class="p-4 sm:ml-64">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-4">Crear nueva tarea</h2>

            @if (session()->has('message'))
                <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                    {{ session('message') }}
                </div>
            @endif

            <form>
                <!-- Título -->
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-bold">Título</label>
                    <input type="text" id="title" wire:model="task.title"
                        class="w-full p-2 border border-gray-300 rounded mt-1" placeholder="Título de la tarea">
                    @error('task.title')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Descripción -->
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-bold">Descripción</label>
                    <textarea id="description" wire:model="task.description" class="w-full p-2 border border-gray-300 rounded mt-1"
                        placeholder="Descripción de la tarea (opcional)"></textarea>
                    @error('task.description')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Prioridad -->
                <div class="mb-4">
                    <label for="priority" class="block text-gray-700 font-bold">Prioridad</label>
                    <select id="priority" wire:model="task.priority"
                        class="w-full p-2 border border-gray-300 rounded mt-1">
                        <option value="baja">Baja</option>
                        <option value="media">Media</option>
                        <option value="alta">Alta</option>
                    </select>
                    @error('task.priority')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Fecha de vencimiento -->
                <div class="mb-4">
                    <label for="due_date" class="block text-gray-700 font-bold">Fecha de vencimiento</label>
                    <input type="date" id="due_date" wire:model="task.due_date"
                        class="w-full p-2 border border-gray-300 rounded mt-1">
                    @error('task.due_date')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Botón de guardar -->
                <button type="submit" wire:click='save'
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar
                    Tarea</button>
            </form>
        </div>
    </div>
</div>
