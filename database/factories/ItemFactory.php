<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Create an explicit Faker instance
        $faker = FakerFactory::create();

        return [
            'name' => $faker->word(),
            'description' => $faker->sentence(),
            'quantity' => $faker->numberBetween(1, 100),
        ];
    }
}
