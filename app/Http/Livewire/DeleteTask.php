<?php

namespace App\Http\Livewire;

use App\Actions\Tasks\DeleteTaskAction;
use Livewire\Component;

class DeleteTask extends Component
{
    /**
     * @var mixed
     */
    public $taskId;

    public function mount($taskId)
    {
        $this->taskId = $taskId;
    }

    public function render()
    {
        return view('livewire.delete-task');
    }

    public function delete()
    {
        app(DeleteTaskAction::class)->execute($this->taskId);
        $this->emit('taskDeleted');
        session()->flash('success', 'successfully saved.');
    }
}
