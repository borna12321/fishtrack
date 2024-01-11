<?php

namespace Database\Factories;

use App\Models\Fish;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class FishFactory extends Factory
{
    protected $model = Fish::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word . ' Fish',
            'species_name' => $this->faker->word . 'Fish',
            'description' => $this->faker->text(),

        ];
    }
}
