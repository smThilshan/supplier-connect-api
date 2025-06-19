<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
     protected $fillable = [
        'name',
        'logo_url',
        'rating',
        'categories', // You can store as JSON or comma-separated string
    ];

     // A supplier offers many products
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    // A supplier can receive many orders
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
    
}
