<?php

namespace Database\Factories;

use App\Models\FishCatch;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class FishCatchFactory extends Factory
{
    protected $model = FishCatch::class;

    public function definition(): array
    {
        return [
            'fish_id' => $this->faker->randomNumber(),
            'user_id' => $this->faker->randomNumber(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'date' => Carbon::now(),
            'time' => Carbon::now(),

        ];
    }
}
