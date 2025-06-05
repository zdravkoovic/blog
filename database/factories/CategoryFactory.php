<?php

namespace Database\Factories;

use DB;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Frontend development', 'Devops', 'Architecture', 'Kultura']),
            'slug' => function (array $attributes) { 
                $slug = Str::slug($attributes['name']);
                $baseSlug = $slug;
                $count = 1;

                while(DB::table('categories')->where('slug', $slug)->exists()){
                    $slug = $baseSlug . '-' . $count++;
                }

                return $slug;
            }
        ];
    }
}
