<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // We leave out seller_id here, to set it manually in the seeder
            'name' => $this->faker->words(3, true),
            'price' => $this->faker->randomFloat(2, 5, 1000),
            'description' => $this->faker->optional()->paragraph(),
            'quantity' => $this->faker->numberBetween(1, 200),
        ];
    }
}
