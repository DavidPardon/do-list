<?php

namespace App\Livewire\Views;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskEdit extends Component
{
    public $task;
    public $title;
    public $description;
    public $priority;
    public $due_date;

    public function mount(Task $task)
    {
        $this->task = $task;

        // Inicializamos las propiedades del formulario con los valores de la tarea
        $this->title = $this->task->title;
        $this->description = $this->task->description;
        $this->priority = $this->task->priority;
        $this->due_date = $this->task->due_date;
    }

    public function updateTask()
    {
        // Validar los datos
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'priority' => 'required|in:baja,media,alta',
            'due_date' => 'required|date',
        ]);

        // Actualizar la tarea en la base de datos
        $this->task->update([
            'title' => $this->title,
            'description' => $this->description,
            'priority' => $this->priority,
            'due_date' => $this->due_date,
        ]);

        // Mensaje de éxito
        session()->flash('message', 'Tarea actualizada exitosamente.');

        // Redireccionar a la lista de tareas
        return redirect()->route('tareas');
    }

    public function render()
    {
        return view('livewire.views.task-edit')->layout('layouts.app');
    }
}
