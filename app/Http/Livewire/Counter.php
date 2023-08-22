<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $likes = 0;
    public $dislikes = 0;
    public $message;

    public function addlike() 
    {
        $this->likes++;
    }

    public function adddislike()
    {
        $this->dislikes++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
