<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'guardianName' => fake()->firstName(),
            'guardianEmail' => fake()->email(),
            'childName' => fake()->firstName(),
            'childAge' => fake()->numberBetween(1, 6),
            'message' => fake()->text(),
        ];
    }
}
