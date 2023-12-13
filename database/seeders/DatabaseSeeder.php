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
        $adminUser = User::factory(1)->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('rammstei1')
        ]);
        $testUsers = User::factory(10)->create();


        // Create teams
        $teams = Team::factory(5)->create(); // Assuming you have a TeamFactory
        $fish = Fish::factory(5)->create();


        // Assign each user to a random team
        $testUsers->each(function ($user) use ($teams) {
            $user->teams()->attach(
                $teams->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
