<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function products(): BelongsToMany{
        return $this->belongsToMany(Product::class)
        ->withPivot('quantity', 'price')
        ->withTimestamps();
    }
}
