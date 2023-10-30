<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'category_id',
    ];
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    function orderItems()
    {
        return $this->hasMany(Order_item::class);
    }
}
