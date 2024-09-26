<?php

namespace App\Livewire\Views;

use Livewire\Component;

class CreateTask extends Component
{
    
    public function render()
    {
        return view('livewire.views.create-task')->layout('layouts.app');
    }
}
