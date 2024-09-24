<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Task;

class SaveTask extends Form
{
    #[Validate('required','string','max:255')]
    public $title;
    #[Validate('nullable','string')]
    public $description;
    #[Validate('required','in:baja,media,alta')]
    public $priority = 'media';
    #[Validate('required','date')]
    public $due_date;

    public function store()
    {
        $this->validate();
        
        Task::create([
            'title' => $this->title,
            'description' => $this->description,
            'priority' => $this->priority,
            'due_date' => $this->due_date,
            'status' => 'pendiente',
            'user_id' => auth()->id(),
        ]);

    }
}
