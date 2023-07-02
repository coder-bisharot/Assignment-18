<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            // 'name'=>$cat[rand(0,2)],
            'name'=>fake()->randomElement(['Technology', 'Health and Fitness', 'Travel and Adventure',
            'Food and Cooking', 'Fashion and Style', 'Personal Development',
            'Business and Entrepreneurship', 'Finance and Investment', 'Art and Culture',
            'Sports and Fitness', 'Education and Learning', 'Science and Technology',
            'Lifestyle and Inspiration', 'Beauty and Skincare', 'Gaming and Technology']),
        ];
    }
}
