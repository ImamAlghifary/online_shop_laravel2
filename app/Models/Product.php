<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    public function cartItems(): HasMany{
        return $this->hasMany(CartItem::class);
    }

    public function orders(): BelongsToMany{
        return $this->belongsToMany(Order::class)
        ->withPivot('quantity', 'price')
        ->withTimestamps();
    }

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }

}
