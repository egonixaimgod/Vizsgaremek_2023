<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Brands;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Categories::factory(),
            'brand_id' => Brands::factory(),
            'name' => Str::random(10),
            'cost' => $this->faker->numberBetween(10000,100000),
            'amount' => $this->faker->numberBetween(10,100),
            'description' => Str::random(10),
        ];
    }
}
