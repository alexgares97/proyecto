<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Element>
 */
class ElementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
            'date' => $this->faker->date,
            'desc' => $this->faker->paragraph,
            'link' => $this->faker->url,
            'image' => $this->faker->imageUrl,
            'tags' => $this->faker->words(3, true),
        ];
    }
}
