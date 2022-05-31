<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'username' => 'user',
            'email'    => 'user@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        $role        = Role::where('name', 'user')->first();
        $role->givePermissionTo([$permissions]);
        $user->assignRole($role);
    }
}
