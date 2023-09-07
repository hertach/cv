<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PersonalInformation>
 */
class PersonalInformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nationality' => fake()->country(),
            'hometown' => fake()->city(),
            'birth_date' => fake()->date(),
            'civil_status' => 'ledig',
            'children'=> fake()->numberBetween(0,4),
        ];
    }
}
