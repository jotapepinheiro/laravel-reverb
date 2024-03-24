<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Counter extends Component
{
    public int $count = 0;
    public function render()
    {
        return view('livewire.counter');
    }

    #[On('echo:count-channel,CountReverbEvent')]
    public function add(): void
    {
        $this->count++;
    }
}

