<?php

namespace App\Http\Livewire;

use App\Models\model_has_role;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class ModalRoleUserCreate extends Component
{

    public $ru;


    public function index()
    {
        return view('admin.forms.roleuser');
    }

    public function store()
    {
        $data =validator($this->ru,[
            'role_id' => 'required',
            'model_id' => 'required',
            'model_type' => 'required'
        ])->validate();
    
        model_has_role::create($data);
            return redirect()->route('RoleUser.show');
    }
    public function mount()
    {
        $this->ru['model_type'] = 'App\Models\User';
    }
    public function render()
    {

        $roles = Role::get();
        $users = User::get();
        return view('livewire.modal-role-user-create', compact('users', 'roles'));
    }
}
