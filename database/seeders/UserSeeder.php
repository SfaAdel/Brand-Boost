<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'user@admin.com',
            'name' => 'admin1',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'email' => 'user1@admin.com',
            'name' => 'Super Admin',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'email' => 'user2@admin.com',
            'name' => 'admin',
            'password' => bcrypt('password'),
        ]);
    }
}
