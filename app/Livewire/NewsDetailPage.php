<?php

namespace App\Livewire;

use Livewire\Component;

class NewsDetailPage extends Component
{
    public function render()
    {
        return view('livewire.news-detail-page')
            ->layout('layouts.app');
    }
    public string $slug;

    public function mount(string $slug): void
    {
        $this->slug = $slug;
    }
}
