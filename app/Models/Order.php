<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     protected $fillable = [
        'user_id',
        'supplier_id',
        'total_amount',
        'status',
    ];

    // Each order belongs to a user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Each order belongs to a supplier
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    // Each order has many order items
    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
