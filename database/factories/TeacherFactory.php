<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //generates actual image into local server using faker provider
        $fakerFileName = $this->faker->image("public/assets/images", 400, 700);

        $nameVariable = fake()->firstName();
        return [
            'name' => $nameVariable,
            'designation' => fake()->date(),
            'facebook' => $nameVariable."@facebook.com",
            'twitter' => $nameVariable."@twitter.com",
            'instgram' => $nameVariable."@instgram.com",
            //save image name into database
            'image' => basename($fakerFileName),
            // 'published' => fake()->numberBetween(0, 1),
            'published' => 1,
        ];
    }
}
