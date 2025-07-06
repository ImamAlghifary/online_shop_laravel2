<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\CartItem;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = Category::factory(5)->create();
        $products = Product::factory(150)->create();
        $users = User::factory(5)->create();
        Order::factory(10)->create()->each(function ($order) use ($products) {
            $selectedProducts = $products->random(2); 
            foreach ($selectedProducts as $product) {
                $order->products()->attach($product->id, [
                    'quantity' => rand(1, 3),
                    'price' => $product->price,
                ]);
            }
        });
        foreach ($users as $user) {
            CartItem::factory(3)->create([
                'user_id' => $user->id,
                'product_id' => $products->random()->id,
            ]);
        }

    }
}
