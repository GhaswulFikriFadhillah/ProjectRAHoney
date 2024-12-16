<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function product()
{
    return $this->belongsTo(Product::class);
}

public function status()
{
    return $this->hasOne(OrderStatus::class);
}

public function rating()
{
    return $this->hasOne(Rating::class);
}

}
