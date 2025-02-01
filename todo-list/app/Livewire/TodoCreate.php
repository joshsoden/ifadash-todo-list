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
        $new_todo = [
            'title' => $this->title,
            'complete' => 0
        ];

        Todo::create($new_todo);

        $this->dispatch('todo-created', ['todo', $new_todo]);
    }
}
