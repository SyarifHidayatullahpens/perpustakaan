<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            'user.list',
            'user.show',
            'user.create',
            'user.edit',
            'user.delete',
            'book.list',
            'book.create',
            'book.edit',
            'book.delete',
            'rak.list',
            'rak.create',
            'rak.edit',
            'rak.delete',
            'penerbit.list',
            'penerbit.create',
            'penerbit.edit',
            'penerbit.delete',
            'pengembalian.list',
            'pengembalian.create',
            'pengembalian.edit',
            'pengembalian.delete',
            'peminjaman.list',
            'peminjaman.create',
            'peminjaman.edit',
            'peminjaman.delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }
    }
}
