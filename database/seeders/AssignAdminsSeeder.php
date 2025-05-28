<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AssignAdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener los primeros 3 usuarios según su ID
        $admins = User::orderBy('id')->take(3)->get();

        foreach ($admins as $user) {
            // Asignar el rol 'admin' si no lo tiene
            if (!$user->hasRole('admin')) {
                $user->assignRole('admin');
            }
        }
    }
}
