<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BusinessOwner; // Ensure the BusinessOwner model is imported

class BusinessOwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $businessOwners = [
            [
                'email' => 'ahmed@gmail.com',
                'password' => bcrypt('password'),
                'profile_image' => 'ahmed.png',
                'active' => 1,
                'phone' => '01012074956',
                'translations' => [
                    'ar' => [
                        'name' => 'أحمد محمد على',
                        'company_name' => 'شركة المجد للسيارات',
                    ],
                    'en' => [
                        'name' => 'Ahmed Mohamed Ali',
                        'company_name' => 'Elmagd Company For Cars',
                    ],
                ],
            ],
            [
                'email' => 'sarah13@gmail.com',
                'password' => bcrypt('password'),
                'profile_image' => 'sarah.png',
                'active' => 1,
                'phone' => '01012075656',
                'translations' => [
                    'ar' => [
                        'name' => 'سارة السيد راضي',
                        'company_name' => 'شركة النور',
                    ],
                    'en' => [
                        'name' => 'Sarah Elsayed Rady',
                        'company_name' => 'Al Nour Company',
                    ],
                ],
            ],
        ];

        foreach ($businessOwners as $data) {
            // Create the base business owner record
            $businessOwner = BusinessOwner::create([
                'email' => $data['email'],
                'password' => $data['password'],
                'profile_image' => $data['profile_image'],
                'active' => $data['active'],
                'phone' => $data['phone'],
            ]);

            // Add translations for each language
            foreach ($data['translations'] as $locale => $translation) {
                $businessOwner->translateOrNew($locale)->fill($translation);
            }

            // Save translations
            $businessOwner->save();
        }
    }
}
