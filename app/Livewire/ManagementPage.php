<?php

namespace App\Livewire;

use Livewire\Component;

class ManagementPage extends Component
{
    public function render()
    {
        return view('livewire.management-page')
                ->layout('layouts.app');
    }
}
