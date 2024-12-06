<?php

namespace Database\Seeders;

use Database\Factories\user;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // user::factory(10)->create();

        user::factory()->create([
            'name' => 'Test user',
            'email' => 'test@example.com',
        ]);
    }
}
