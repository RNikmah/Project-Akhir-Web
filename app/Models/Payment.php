<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
    /** 
     * fillable 
     * 
     * @var array 
     */
    protected $fillable = [
        // 'cart_id',
        // 'user_id',
        'billing_address',
        'shipping_address',
        'invoice_amount',
        'status',
        'invoice_number',
    ];
}
