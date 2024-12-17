<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class KidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'surname' => $this->faker->word(),
            'photo' => $this->faker->imageUrl(640, 640, 'kids'),
            'age' => $this->faker->numberBetween(0, 18),
            'behaviour' => $this->faker->boolean(),
        ];
    }
}