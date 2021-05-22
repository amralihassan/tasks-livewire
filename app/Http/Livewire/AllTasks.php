<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class AllTasks extends Component
{
    protected $listeners = ['taskAdded' => '$refresh'];

    public function render()
    {
        $tasks = Task::fetch_all();
        return view('livewire.all-tasks', compact('tasks'));
    }
}
