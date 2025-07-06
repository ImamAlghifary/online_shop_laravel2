<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartItem>
 */
class CartItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "product_id" => Product::inRandomOrder()->first()?->id,
            "user_id" => User::inRandomOrder()->first()?->id,
            "price" => $this->faker->randomFloat(2, 5, 500),
            "quantity" => $this->faker->numberBetween(1, 10),
        ];
    }
}
