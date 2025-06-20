<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;


class OrderController extends Controller
{   
     public function store(Request $request)
    {
        // Validate request
        $validated = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'supplier_id' => 'required|integer|exists:suppliers,id',
            'items' => 'required|array|min:1',
            'items.*.product_id' => 'required|integer|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1',
        ]);

        // Calculate total amount
        $totalAmount = 0;

        foreach ($validated['items'] as $item) {
            $product = \App\Models\Product::find($item['product_id']);
            $totalAmount += $product->price * $item['quantity'];
        }

        // Create Order
        $order = Order::create([
            'user_id' => $validated['user_id'],
            'supplier_id' => $validated['supplier_id'],
            'total_amount' => $totalAmount,
            'status' => 'pending',
        ]);

        // Create OrderItems
        foreach ($validated['items'] as $item) {
            $product = \App\Models\Product::find($item['product_id']);

            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'quantity' => $item['quantity'],
                'price' => $product->price,
            ]);
        }

        return response()->json([
            'message' => 'Order placed successfully',
            'order_id' => $order->id,
        ], 201);
    }
    
}
