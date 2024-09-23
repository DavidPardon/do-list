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



    public function columns(): array
    {
        return [
            Column::make("Title", "title")
                ->sortable()
                ->searchable(),

            Column::make("Description", "description")
                ->sortable()
                ->searchable(),

            Column::make("Status", "status")
                ->sortable()
                ->searchable(),

            Column::make("Priority", "priority")
                ->sortable()
                ->searchable(),

            Column::make("Due date", "due_date")
                ->sortable()
                ->searchable(),
        ];
    }
}
