<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class Sidebar extends Component
{

    public $menu = [
        ['name' => 'Home', 'route' => 'home', 'icon' => 'home', 'role' => '0'],
        ['name' => 'register', 'route' => 'register', 'icon' => 'register', 'role' => '0'],
        ['name' => 'admin', 'route' => 'user.admin', 'icon' => 'admin', 'role' => '1'],
        ['name' => 'users', 'route' => 'user.users', 'icon' => 'users', 'role' => '1'],
        ['name' => 'uploadContent', 'route' => 'content.upload', 'icon' => 'uploadContent', 'role' => '1'],
        ['name' => 'Data Kontent', 'route' => 'content.data', 'icon' => 'dataContent', 'role' => '1'],
    ];
    
    public $isOpen = false;
    public function togle() {
        $this->isOpen = !$this->isOpen;
    }
    
    public function render()
    {
        return view('livewire.layouts.sidebar');
    }
}
