<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // Import Hash for passwords

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Re-create your Admin User automatically
        // This ensures you can always log in to /admin after a refresh
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'), // Sets password to "password"
        ]);

        // 2. Run your Content Seeders
        $this->call([
            ServiceSeeder::class,
            ProjectSeeder::class,
            BlogSeeder::class,
            TeamSeeder::class,
        ]);
    }
}