<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;

class MigrateRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'user']);


        User::where('role', 'admin')->each(function ($user) {
            $user->syncRoles('admin');
        });

        User::where('role', 'user')->each(function ($user) {
            $user->syncRoles('user');
        });
    }
}
