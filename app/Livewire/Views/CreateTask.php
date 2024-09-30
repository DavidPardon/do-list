<?php

namespace App\Livewire\Views;



use Livewire\Component;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class CreateTask extends Component
{
    // Propiedades que representan los campos del formulario
    public $title;
    public $description;
    public $priority = 'media';  // Valor por defecto
    public $due_date;

    // Definir las reglas de validación
    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'priority' => 'required|in:baja,media,alta',
        'due_date' => 'required|date',
    ];

    // Mensajes de validación personalizados
    protected $messages = [
        'title.required' => 'El título es obligatorio.',
        'title.max' => 'El título no debe exceder los 255 caracteres.',
        'priority.required' => 'La prioridad es obligatoria.',
        'priority.in' => 'La prioridad seleccionada no es válida.',
        'due_date.required' => 'La fecha de vencimiento es obligatoria.',
        'due_date.date' => 'La fecha de vencimiento no es una fecha válida.',
    ];

    // Método para guardar la tarea
    public function saveTask()
    {
        // Validar los datos del formulario
        $this->validate();

        // Crear la nueva tarea en la base de datos
        Task::create([
            'title' => $this->title,
            'description' => $this->description,
            'priority' => $this->priority,
            'due_date' => $this->due_date,
            'status' => 'pendiente',  // Tareas nuevas comienzan con estado "pendiente"
            'user_id' => Auth::id(),  // Asignar la tarea al usuario autenticado
        ]);

        // Mensaje de éxito
        session()->flash('message', 'Tarea creada exitosamente.');

        // Redireccionar a la lista de tareas
        return redirect()->route('tareas');
    }

    // Método para renderizar la vista
    public function render()
    {
        return view('livewire.views.create-task')->layout('layouts.app');
    }
}

