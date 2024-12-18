<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(AdminSeeder::class);
        // $this->call(UserSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(SettingTranslationSeeder::class);
        $this->call(TitleSeeder::class);
        $this->call(jobTitleSeeder::class);
        $this->call(FieldSeeder::class);
        $this->call(BusinessOwnerSeeder::class);
        $this->call(FreelancerSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(VideoSeeder::class);
        

    }
}
