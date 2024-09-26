<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Task;

class EditTask extends Form
{
    #[Validate('required','string','max:255')]
    public $title;
    #[Validate('nullable','string')]
    public $description;
    #[Validate('required','in:baja,media,alta')]
    public $priority = 'media';
    #[Validate('required','date')]
    public $due_date;

    public $idtask;

    public function updateTask(){
        $edittask= Task::find($this->idtask);
        
        $edittask->update([
            'title' => $this->title,
            'description' => $this->description,
            'priority' => $this->priority,
            'due_date' => $this->due_date,
        ]);

          
    }

}
