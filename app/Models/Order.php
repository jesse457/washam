<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'customer_name',
        'customer_phone',
        'pickup_address',
        'delivery_address',
        'service_type',
        'items_count',
        'price',
        'status',
        'pickup_date',
        'delivery_date'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
