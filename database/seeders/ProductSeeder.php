<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'supplier_id' => 1,
            'name' => 'Apple',
            'image_url' => 'https://example.com/apple.png',
            'price' => 1.5,
        ]);

        Product::create([
            'supplier_id' => 1,
            'name' => 'Banana',
            'image_url' => 'https://example.com/banana.png',
            'price' => 0.75,
        ]);

        Product::create([
            'supplier_id' => 2,
            'name' => 'Carrot',
            'image_url' => 'https://example.com/carrot.png',
            'price' => 1.1,
        ]);
    }
}
