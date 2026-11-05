<?php

namespace App\Livewire;

use Livewire\Component;

class AgendaPage extends Component
{
    public function render()
    {
        return view('livewire.agenda-page')
            ->layout('layouts.app');
    }
}
