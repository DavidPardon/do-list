@if($task->status === 'pendiente')
    <button wire:click="markAsCompleted({{ $task->id }})" 
            class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
        Completar
    </button>

@else
<button 
    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
Completada
</button>
@endif

<a href="{{route("editar.tarea",$task)}}">
    <button 
        class="bg-blue-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
    Editar
    </button>
</a>
<button wire:click="deleteTask({{ $task->id }})"
        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
    Borrar
</button>