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
        $user->assignRole('SuperAdmin');

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1122')
        ]);
        $user->assignRole('Admin');

        $user = User::create([
            'name' => 'John',
            'email' => 'john@gmail.com',
            'password' => Hash::make('john1122')
        ]);
        $user->assignRole('User');
        $user = User::create([
            'name' => 'James',
            'email' => 'james@gmail.com',
            'password' => Hash::make('james1122')
        ]);
        $user->assignRole('User');
        $user = User::create([
            'name' => 'Samuel',
            'email' => 'samuel@gmail.com',
            'password' => Hash::make('samuel1122')
        ]);
        $user->assignRole('User');
        $user = User::create([
            'name' => 'Daniel',
            'email' => 'daniel@gmail.com',
            'password' => Hash::make('daniel1122')
        ]);
        $user->assignRole('User');
        $user = User::create([
            'name' => 'Ethan',
            'email' => 'ethan@gmail.com',
            'password' => Hash::make('ethan1122')
        ]);
        $user->assignRole('User');
        $user = User::create([
            'name' => 'David',
            'email' => 'david@gmail.com',
            'password' => Hash::make('david1122')
        ]);
        $user->assignRole('User');
    }
}
