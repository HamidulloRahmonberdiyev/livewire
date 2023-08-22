<?php

namespace App\Http\Livewire;

use App\Models\Todo as ModelsTodo;
use Illuminate\Http\Request;
use Livewire\Component;

class Todo extends Component
{
    public $task;

    protected $rules = [
        'task' => ['required', 'string', 'max:255', 'min:3']
    ];

    public function create()
    {
        $this->validate();
        
        ModelsTodo::create([
            'task' => $this->task,
        ]);

        $this->reset('task');
    }

    public function render()
    {
        return view('livewire.todo', [
            'todos' => ModelsTodo::all(),
        ]);
    }
}
