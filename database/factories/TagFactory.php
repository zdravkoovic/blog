<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Laravel', 'PHP', 'Vue.js', 'React', 'JavaScript',
                'API', 'Testing', 'DevOps', 'Docker', 'Redis',
                'Performance', 'Database', 'Cache', 'Security'
            ]),
            'slug' => fn (array $attributes) => Str::slug($attributes['name'])
        ];
    }
}
