<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => 'admin123',
                'is_admin' => 1,
            ],
            [
                'name' => 'Client1',
                'email' => 'client1@gmail.com',
                'password' => 'client123',
            ],
            [
                'name' => 'Client',
                'email' => 'client@gmail.com',
                'password' => 'client123',
            ]
        ];

        foreach($users as $user)
        {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
                'is_admin' => $user['is_admin'] ?? 0,
            ]);
        }
    }
}
