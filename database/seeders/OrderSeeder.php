<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run()
    {
        Order::create([
            'user_id' => 1,
            'supplier_id' => 1,
            'total_amount' => 5.25,
            'status' => 'pending',
        ]);
    }
}
