<?php

namespace App\Http\Livewire;

use App\Actions\Tasks\StoreTaskAction;
use Livewire\Component;

/**
 * Class CreateTask
 * @package App\Http\Livewire
 * @author Ahmed Helal Ahmed
 */
class CreateTask extends Component
{
    public $title = '';
    public $description = '';

    public function render()
    {
        return view('livewire.create-task');
    }

    public function store()
    {
        $this->validate([
            'title' => ['required','string','min:2','max:100'],
            'description' => ['nullable','string','min:0','max:65535'],
        ]);
        app(StoreTaskAction::class)->execute([
            'title' => $this->title,
            'description' => $this->description,
            'user_id'=> auth()->id()
        ]);
        $this->emit('taskAdded');
        $this->clearInputs();
        session()->flash('success','successfully saved.');

    }

    private function clearInputs()
    {
        $this->title = '';
        $this->description = '';
    }
}
