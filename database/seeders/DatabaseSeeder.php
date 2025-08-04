<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
            'country' => 'Nigeria',
            'phone_number' => '08012345678',
            'gender' => 'male',
            'address' => '123 Test Street',
            'password' => bcrypt('password'), // Or use Hash::make if imported
            'email_verified_at' => now(),
        ]);
    }
}
