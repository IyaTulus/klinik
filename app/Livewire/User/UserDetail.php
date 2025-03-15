<?php

namespace App\Livewire\User;

use App\Models\User;
use App\Models\UserProfiles;
use Livewire\Component;

class UserDetail extends Component
{
    protected $listeners = ['showUserDetail'];
    public $detailOpen = false;
    public $selectedUser;
    public $selectedProfile;

    public function toggleClose() {
        $this->detailOpen = !$this->detailOpen;
        if (!$this->detailOpen) {
            return redirect(request()->header('Referer'));
        }
    }

    public function showUserDetail($userId) {
        $this->selectedUser = User::find($userId);
        $this->selectedProfile = UserProfiles::where('user_id', $userId)->first();

        $this->detailOpen = true;
    }

    public function render()
    {
        return view('livewire.user.user-detail');
    }
}
