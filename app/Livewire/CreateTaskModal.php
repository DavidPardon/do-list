<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;
use App\Models\User;
class CreateTaskModal extends Component
{
    public $isOpen = false;
    public $title;
    public $description;
    public $priority = 'media';
    public $due_date;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'priority' => 'required|in:baja,media,alta',
        'due_date' => 'required|date',
    ];

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->reset(['isOpen', 'title', 'description', 'priority', 'due_date']);
    }

    public function saveTask()
    {
        $this->validate();

        Task::create([
            'title' => $this->title,
            'description' => $this->description,
            'priority' => $this->priority,
            'due_date' => $this->due_date,
            'status' => 'pendiente',
            'user_id' => Auth::user()>id(),
        ]);

        session()->flash('message', 'Tarea creada exitosamente.');

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.create-task-modal');
    }
}
