<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user = User::where('email', 'j.a.y@list.ru')->first();
        $role = Role::where('name', 'admin')->first();
        $user->assignRole($role->name);

    }
}
