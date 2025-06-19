<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'supplier_id',
        'name',
        'image_url',
        'price',
    ];

    // Each product belongs to a supplier
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }
    
}
