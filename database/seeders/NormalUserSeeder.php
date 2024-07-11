<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NormalUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'user1',
            'email' => 'user1@user.com',
            'email_verified_at' => now(),
            'password' => '123456789',
            // 'remember_token' => Str::random(10),
        ])->assignRole('user');

        User::create([
            'name' => 'user2',
            'email' => 'user2@user.com',
            'email_verified_at' => now(),
            'password' => '123456789',
            // 'remember_token' => Str::random(10),
        ])->assignRole('user');

        User::create([
            'name' => 'user3',
            'email' => 'user3@user.com',
            'email_verified_at' => now(),
            'password' => '123456789',
            // 'remember_token' => Str::random(10),
        ])->assignRole('user');
    }
}
