<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();
        return [
            'title' => $title,
            'image' => fake()->imageUrl(),
            'category_id' => Category::inRandomOrder()->first()->id,
            'user_id' => 1,
            'slug' => Str::slug($title),
            'content' => fake()->paragraph(),
            'published_at' => fake()->optional()->dateTime(),
        ];
    }
}
