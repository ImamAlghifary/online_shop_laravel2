<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CartItem extends Model
{
    use HasFactory;
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function product(): BelongsTo{
        return $this->belongsTo(Product::class);
    }
}
