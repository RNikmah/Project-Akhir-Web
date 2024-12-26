<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;
    /** 
     * fillable 
     * 
     * @var array 
     */
    protected $fillable = [
        // 'user_id',
        // 'destination_id',
        'quantity',
        'total_price',
    ];
}
