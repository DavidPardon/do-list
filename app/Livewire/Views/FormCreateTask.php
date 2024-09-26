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
        $this->dispatch("SaveTask");
        session()->flash('message', 'Tarea creada exitosamente.');

        
        
    }
    
    public function render()
    {
        return view('livewire.views.form-create-task');
    }
}
