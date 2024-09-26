<?php

namespace App\Livewire\Views;

use Livewire\Component;

class EditTask extends Component
{
    public function render()
    {
        return view('livewire.views.edit-task')->layout('layouts.app');
    }
}
