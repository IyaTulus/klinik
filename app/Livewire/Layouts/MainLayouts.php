<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class MainLayouts extends Component
{

    public $title;

    public function mount($title = 'Home')
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.layouts.main-layouts');
    }
}
