<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDeviceType extends Model
{

    use HasFactory;
    protected $fillable = [
        "product_id",
        "device_type_id",
    ];
}
