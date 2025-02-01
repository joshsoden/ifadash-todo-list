<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo;

class TodoList extends Component
{
    public $todos = [];

    public function render()
    {
        $this->todos = Todo::all();
        return view('livewire.todo-list');
    }
}
