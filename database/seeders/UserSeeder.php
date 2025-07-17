<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create main admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@toparchive.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        // Create content team users
        $contentTeam = [
            [
                'name' => 'Tanzania Editor',
                'email' => 'tanzania@toparchive.com',
            ],
            [
                'name' => 'Ghana Editor',
                'email' => 'ghana@toparchive.com',
            ],
            [
                'name' => 'Nigeria Editor',
                'email' => 'nigeria@toparchive.com',
            ],
            [
                'name' => 'Uganda Editor',
                'email' => 'uganda@toparchive.com',
            ],
            [
                'name' => 'Content Manager',
                'email' => 'content@toparchive.com',
            ]
        ];

        foreach ($contentTeam as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'email_verified_at' => now(),
                'password' => Hash::make('user@2021'),
                'remember_token' => Str::random(10),
            ]);
        }
    }
}