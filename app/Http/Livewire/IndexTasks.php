<?php

namespace App\Http\Livewire;

use App\Actions\Tasks\IndexTasksAction;
use Livewire\Component;
use Livewire\WithPagination;

/**
 * Class IndexTasks
 * @package App\Http\Livewire
 * @author Ahmed Helal Ahmed
 */
class IndexTasks extends Component
{
    use WithPagination;

    private $tasks;
    protected $listeners = ['taskAdded' => 'render','taskDeleted'=>'render'];

    public function setTasks()
    {
        $this->tasks = app(IndexTasksAction::class)->execute();
    }

    public function render()
    {
        $this->setTasks();
        return view('livewire.index-tasks',['tasks'=>$this->tasks]);
    }
}
