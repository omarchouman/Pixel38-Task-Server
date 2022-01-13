<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quantity',
        'unit',
        'price',
        'weight'
    ];

    public function shipmentproducts(): HasMany
    {
        return $this->hasMany(ShipmentProduct::class);
    }
}
