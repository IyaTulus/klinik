<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class AddAdmin extends Component
{
    public $user_id;
    public $username;
    public $clinic;
    public $isOpen = false;

    public function toggle() {
        $this->isOpen = !$this->isOpen;
    }

    public function getData() {
        $this->username = User::where('id', '=', $this->user_id)->first()->username;
        
    }

    public function store () {
        $this->validate([
            'user_id' => 'required',
            'username' => 'required',
            'clinic' => 'required',
        ]);

        User::where('id', '=', $this->user_id)->update([
            'role' => 'ADMIN',
        ]);

        return redirect()->route('user.admin')->with('success', "User has been added as admin.");
    }

    public function render()
    {
        return view('livewire.user.add-admin', [
            'users' => User::where('role', '!=', 'ADMIN')->orderBy('name', 'asc')->get(), // Adjust the number as needed
        ]);
    }
}
