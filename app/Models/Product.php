<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Tentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    // Relasi ke model Order
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
