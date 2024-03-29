<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'username' => 'admin',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        $role        = Role::where('name', 'admin')->first();
        $role->givePermissionTo([$permissions]);
        $user->assignRole($role);
    }
}
