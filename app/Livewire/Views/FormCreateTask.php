<?php

namespace App\Livewire\Views;
use App\Livewire\Forms\SaveTask;

use Livewire\Component;


class FormCreateTask extends Component
{
    public SaveTask $task;
    
    public function save()
    {
        $this->task->store()  ;
        $this->dispatch("saveTask");
        session()->flash('message', 'Tarea creada exitosamente.');

        $this->reset(['title', 'description', 'priority', 'due_date']);

        
    }
    
    public function render()
    {
        return view('livewire.views.form-create-task');
    }
}
