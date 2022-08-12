<?php

namespace App\Http\Livewire;

use App\Models\TodoItem;
use Livewire\Component;

class TodoList extends Component
{
    public $todos = [];
    public string $todoText = '';

    public function mount()
    {
        $this->getTodos();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }

    public function store()
    {
        TodoItem::create([
            'todo' => $this->todoText,
            'completed' => false
        ]);

        $this->todoText = '';
        $this->getTodos();
    }

    public function toggleTodo(TodoItem $todo)
    {
        if (!$todo) {
            return;
        }

        $todo->completed = !$todo->completed;
        $todo->save();

        $this->getTodos();
    }

    public function delete(TodoItem $todo)
    {
        if (!$todo) {
            return;
        }

        $todo->delete();

        $this->getTodos();
    }

    public function getTodos()
    {
        $this->todos = TodoItem::query()
            ->orderBy('created_at', 'DESC')
            ->get();
    }
}
