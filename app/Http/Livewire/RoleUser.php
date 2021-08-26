<?php

namespace App\Http\Livewire;

use App\Models\model_has_role;
use App\Models\Role;
use Livewire\Component;

class RoleUser extends Component
{
    public function role_active($id)
    {
        $role = Role::find($id);
        if ($role->status == 1) {

            $role->update([
                'status' => 0
            ]);
        }
        else if($role->status == 0) {

            $role->update([
                'status' => 1
            ]);
        }
        $this->emit('refresh', 'ref');
    }

    public function index()
    {


        return view('admin.tables.RoleUser');
    }
    public function render()
    {
        $role = Role::get();
        $userRole = model_has_role::with('user', 'role')->get();
        return view('livewire.role-user', compact('role', 'userRole'));
    }
}
