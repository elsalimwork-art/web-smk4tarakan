<?php

namespace App\Livewire;

use App\Models\Announcement as ModelsAnnouncement;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Announcement extends Component
{
    public $files;

    public function render()
    {
        return view('livewire.announcement');
    }

    public function mount()
    {
        $this->files = ModelsAnnouncement::all();
    }

    public function download($id)
    {
        $file = ModelsAnnouncement::findOrFail($id);

        if (!Storage::disk('public')->exists($file->path)) {
            abort(404, 'File tidak ditemukan.');
        }

        return Storage::disk('public')->download($file->path, $file->file_name);
    }
}
