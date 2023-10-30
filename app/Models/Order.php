<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'address',
        'date',
        'status',
        'total',
        'user_id',
    ];
    function discount()
    {
        return $this->belongsTo(Discount::class, 'discount_id');
    }
    function orderItems()
    {
        return $this->hasMany(Order_item::class);
    }
    function user()
    {
        return $this->belongsTo(Client::class, 'user_id');
    }
}
