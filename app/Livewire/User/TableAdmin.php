<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class TableAdmin extends Component
{
    use WithPagination;
    public $search;
    public $id = "asa";

    public function delete($id) {
        $this->id = $id;
        User::where('id', '=', $id)->update([
            'role' => 'PATIENT',
        ]);


        redirect()->route('user.admin')->with('success', 'User has been removed as admin.');
    }

    public function render()
    {
        $users = User::where('role', '=', 'ADMIN')->orderBy('name', 'asc')->paginate(10); // Adjust the number as needed

        if ($this->search != null) {
            $users = User::where('role', '=', 'ADMIN')
                ->where(function($query) {
                    $query->where('name', 'like', '%' . $this->search . '%')
                          ->orWhere('username', 'like', '%' . $this->search . '%');
                })
                ->orderBy('name', 'asc')
                ->paginate(10); // Adjust the number as needed
        }

        return view('livewire.user.table-admin', [
            'users' => $users,
        ]);
    }
}
