<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProfiles;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        UserProfiles::factory(10)->create();

        // $user = User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // UserProfile::factory()->create([
        //     'user_id' => $user->id
        // ]);

        // User::factory(10)->has(UserProfiles::factory(), 'profile')->create();
    }
}
