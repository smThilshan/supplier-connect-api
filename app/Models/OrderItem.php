<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];

    // Each item belongs to one order
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    // Each item refers to a product
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
