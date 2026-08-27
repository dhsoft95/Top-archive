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
        User::firstOrCreate(
            ['email' => 'admin@toparchive.com'],
            [
                'name'              => 'Admin User',
                'email_verified_at' => now(),
                'password'          => Hash::make('password'),
                'remember_token'    => Str::random(10),
            ]
        );

        $contentTeam = [
            ['name' => 'Tanzania Editor',  'email' => 'tanzania@toparchive.com'],
            ['name' => 'Ghana Editor',     'email' => 'ghana@toparchive.com'],
            ['name' => 'Nigeria Editor',   'email' => 'nigeria@toparchive.com'],
//            ['name' => 'Uganda Editor',    'email' => 'uganda@toparchive.com'],
            ['name' => 'Content Manager',  'email' => 'content@toparchive.com'],
        ];

        foreach ($contentTeam as $user) {
            User::firstOrCreate(
                ['email' => $user['email']],
                [
                    'name'              => $user['name'],
                    'email_verified_at' => now(),
                    'password'          => Hash::make('user@2021'),
                    'remember_token'    => Str::random(10),
                ]
            );
        }
    }
}