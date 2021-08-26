<?php

namespace App\Http\Livewire;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

use function React\Promise\reduce;

class Modals extends Component
{
    public $role;


    public function role()
    {

        $data = Validator::make($this->role, [
            'name' => 'required',
            'guard_name' => 'required'
        ])->validate();

        Role::create($data);

        return redirect()->route('RoleUser.show');
    }
    public function mount()
    {

        $this->role['guard_name'] = 'web';
    }

    public function render()
    {


        return view('livewire.modals');
    }
}
