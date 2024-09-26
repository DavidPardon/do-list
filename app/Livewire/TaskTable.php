<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Task;
use App\Models\User;

class TaskTable extends DataTableComponent
{
    protected $model = Task::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setSearchEnabled()
            ->setPaginationEnabled()
            ->setDefaultSort('due_date', 'asc')  // Ordenar por fecha de vencimiento por defecto
            ->setFilterLayout('slide-down');
    }
    public function builder(): \Illuminate\Database\Eloquent\Builder
    {
        // Retornar las tareas del usuario autenticado
        return Task::query()->where('user_id', auth()->id());
    }

    public function columns(): array
    {
        return [

            Column::make("Id", "id")
                ->sortable()
                ->searchable(),

            Column::make("Titulo", "title")
                ->sortable()
                ->searchable(),

            Column::make("Descripcion", "description")
                ->sortable()
                ->searchable(),

            Column::make("Estado", "status")
                ->sortable()
                ->searchable(),

            Column::make("Prioridad", "priority")
                ->sortable()
                ->searchable(),

            Column::make("Fecha Limite", "due_date")
                ->sortable()
                ->searchable(),
            Column::make('Acciones')
                ->label(fn($row) => view('components.action-button', ['task' => $row])),
        
            ];
    }
    public function deleteTask($taskId)
    {
        $task = Task::find($taskId);

        if ($task) {
            $task->delete();
            session()->flash('message', 'Tarea borrada exitosamente.');
        }
    }
    public function markAsCompleted($taskId)
    {
        $task = Task::find($taskId);
        $task->status = 'completada';
        $task->save();

        session()->flash('message', 'La tarea ha sido marcada como completada.');
    }
}
