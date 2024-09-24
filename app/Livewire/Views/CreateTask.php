<?php

namespace App\Livewire\Views;

use Livewire\Component;
use App\Livewire\Forms\SaveTask;
use App\Models\Task;
class CreateTask extends Component
{
    
    public function render()
    {
        return view('livewire.views.create-task')->layout('layouts.app');
    }
}
