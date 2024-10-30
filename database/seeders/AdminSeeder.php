<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'email' => 'admin@admin.com',
            'name' => 'admin1',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);
        Admin::create([
            'email' => 'admin1@admin.com',
            'name' => 'Super Admin',
            'password' => bcrypt('password'),
            'role' => 'super_admin',
        ]);
        Admin::create([
            'email' => 'admin2@admin.com',
            'name' => 'admin',
            'password' => bcrypt('password'),
            'role' => 'data_entry',
        ]);
    }
}
