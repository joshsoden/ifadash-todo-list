<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;
use App\Models\Todo;

class TodoList extends Component
{
    public $todos_complete = [];
    public $todos_incomplete = [];

    public function render()
    {
        $this->todos_complete = Todo::where('complete', 1)->get();
        $this->todos_incomplete = Todo::where('complete', 0)->get();
        return view('livewire.todo-list');
    }

    #[On('todo-created')] 
    public function add_new_todo($title)
    {
        $this->todos_incomplete->push(['title' => $title, 'complete' => 0]);
    }
}
