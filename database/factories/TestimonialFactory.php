<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //generates actual image into local server using faker provider
        $fakerFileName = $this->faker->image("public/assets/images", 100, 100);

        return [
            'name' => fake()->firstName(),
            'profession' => fake()->word(),
            'description' => fake()->text(),
            //save image name into database
            'image' => basename($fakerFileName),
            'published' => fake()->numberBetween(0, 1),
            // 'published' => 1,

        ];
    }
}
