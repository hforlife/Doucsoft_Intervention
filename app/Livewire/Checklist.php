<?php

namespace App\Livewire;

use Livewire\Component;

class Checklist extends Component
{
    public $i, $input;

    public function mount()
    {
        $this->input = [];
        $this->i = 1;
    }
    public function add($i)
    {
        $this->i = $i + 1;
        array_push($this->input, $i);
    }
    public function remove($key)
    {
        unset($this->input[$key]);

    }
    public function render()
    {
        return view('livewire.checklist');
    }
}
