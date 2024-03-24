<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Joining extends Component
{
    public array $users = [];

    public function render()
    {
        return view('livewire.joining');
    }

    #[On('echo-presence:joining-channel,joining')]
    public function join($data): void
    {
        $this->users[] = $data;
    }

    #[On('echo-presence:joining-channel,leaving')]
    public function leave($data): void
    {
        $this->users = collect($this->users)->where('id', '!=', $data['id'])->toArray();
    }
}
