<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class UserAndPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10 users
        User::factory()->count(10)->create()->each(function ($user) {
            // Create 3 posts for each user
            Post::factory()->count(3)->create(['user_id' => $user->id]);
        });
    }
}
