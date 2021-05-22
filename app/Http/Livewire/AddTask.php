<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class AddTask extends Component
{
    public $title;
    public $description;

    public function render()
    {
        return view('livewire.add-task');
    }

    private function request()
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
        ];
    }

    protected $rules = [
        'title' => 'required|min:5'
    ];

    public function save()
    {
        // validation
        $this->validate();

        Task::store($this->request());
        // create event
        $this->emit('taskAdded');
        $this->title = '';
        $this->description = '';
    }
}
