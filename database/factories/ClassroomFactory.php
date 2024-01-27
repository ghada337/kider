<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //generates actual image into local server using faker provider
        $fakerFileName = $this->faker->image("public/assets/images", 400, 400);

        return [
            'name' => fake()->firstName(),
            'age' => fake()->randomElement(['3-5', '2-3', '1-3', '4-6']),
            'time' => fake()->numberBetween(2, 4)."-".fake()->numberBetween(5, 7),
            'capacity' => fake()->numberBetween(15, 30),
            'cost' => fake()->numberBetween(70, 100),
            //save image name into database
            'image' => basename($fakerFileName),
            // 'published' => fake()->numberBetween(0, 1),
            'published' => 1,
            'teacher_id' => fake()->numberBetween(1, 15),
        ];
    }
}
