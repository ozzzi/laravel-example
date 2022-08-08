<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->name;

        return [
            'user_id' => fake()->numberBetween(1, 10),
            'title' => $title,
            'description' => fake()->text,
            'slug' => Str::slug($title)
        ];
    }
}
