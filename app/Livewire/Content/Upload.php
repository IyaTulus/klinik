<?php

namespace App\Livewire\Content;

use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;

    public $file;
    public $title = "Judul";
    public $caption = "Captions";

    public function updateFile() {
        $this->validate([
            'file' => 'image',
        ]);
    }

    public function render()
    {
        return view('livewire.content.upload');
    }
}
