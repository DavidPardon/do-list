<?php

namespace App\Livewire\Views;

use Livewire\Component;
use App\Models\Task;
use App\Livewire\Forms\EditTask;

class FormEditTask extends Component
{
    public $task;
    public EditTask $edittask;
    public function mount(Task $task)
    {
        $this->task = $task;
        $this->edittask->idtask = $this->task->id;;
        $this->edittask->title = $this->task->title;
        $this->edittask->description = $this->task->description;
        $this->edittask->priority = $this->task->priority;
        $this->edittask->due_date = $this->task->due_date;
    }
    public function render()
    {
        return view('livewire.views.form-edit-task')->layout('layouts.app');
    }
    public function updated()
    {
        $this->validate();
        $this->edittask->updateTask();
        
    }
}
