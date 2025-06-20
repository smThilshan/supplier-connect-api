<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    public function run()
    {
        Supplier::create([
            'name' => 'Fresh Fruits Co.',
            'logo_url' => 'https://example.com/logo1.png',
            'rating' => 4.5,
            'categories' => 'Fruits, Organic',
        ]);

        Supplier::create([
            'name' => 'Veggie Delight',
            'logo_url' => 'https://example.com/logo2.png',
            'rating' => 4.7,
            'categories' => 'Vegetables, Organic',
        ]);
    }
}
