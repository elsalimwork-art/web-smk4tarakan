<?php

namespace App\Livewire;

use Livewire\Component;

class SpmbPage extends Component
{
    public function render()
    {
        return view('livewire.spmb-page')
                ->layout('layouts.app');
    }
}
