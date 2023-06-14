<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('superadmin1122')
        ]);
        // $user->assignRole('SuperAdmin');

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1122')
        ]);
        // $user->assignRole('Admin');

        $user = User::create([
            'name' => 'John',
            'email' => 'john@gmail.com',
            'password' => Hash::make('john1122')
        ]);
        // $user->assignRole('Client');
    }
}
