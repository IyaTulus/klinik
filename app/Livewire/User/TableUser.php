<?php

namespace App\Livewire\User;

use App\Models\User;
use App\Models\UserProfiles;
use Livewire\Component;

class TableUser extends Component
{
    public $selectedUser;
    public $selectedProfile;

    public function detailUser($id) {
        $this->dispatch('showUserDetail', $id)->to('user.user-detail');
    }

    public function render()
    {
        $users = User::orderBy('name', 'asc')->paginate(10);

        return view('livewire.user.table-user', [
            'users' => $users
        ]);
    }
}
