<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipmentProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'shipment_id',
        'product_id',
        'product_qty',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function shipment(): BelongsTo
    {
        return $this->belongsTo(Shipment::class,'shipment_id','id');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
