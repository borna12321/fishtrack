<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Fish;
use App\Models\FishCatch;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create the admin user
        $adminUser = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('rammstei1')
        ]);
        $fish = Fish::factory(5)->create();

        // Create additional users
        $otherUsers = User::factory(10)->create();

        // Combine the admin user with the other users into a single collection
        $allUsers = $otherUsers->concat([$adminUser]);

        // Create teams
        $teams = Team::factory(5)->create();

        // Assign each user (including admin) to random teams
        $allUsers->each(function ($user) use ($teams) {
            $user->teams()->attach(
                $teams->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
