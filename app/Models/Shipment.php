<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_city',
        'customer_country',
        'customer_phone',
        'customer_details',
        'user_id',
        'address_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class,'address_id','id');
    }
    public function shipmentproducts(): HasMany
    {
        return $this->hasMany(Shipmentproduct::class);
    }
}
