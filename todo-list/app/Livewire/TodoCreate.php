<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoCreate extends Component
{
    public $title = "";

    public function render()
    {
        return view('livewire.todo-create');
    }

    public function create_todo()
    {
        Todo::create([
            'title' => $this->title,
            'complete' => 0
        ]);

        $this->dispatch('todo-created', ['title', $this->title]);
    }
}
