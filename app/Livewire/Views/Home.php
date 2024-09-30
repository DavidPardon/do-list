<?php

namespace App\Livewire\Views;

use Livewire\Component;

class Home extends Component
{
   
    public function render()
    {
        return view('livewire.views.home')->layout('layouts.app');
    }
}
