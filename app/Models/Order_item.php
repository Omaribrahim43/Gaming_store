<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity',
        'price',
        'order_id',
        'product_id',
    ];
    function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
