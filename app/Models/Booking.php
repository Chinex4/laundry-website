<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'phone',
        'item',
        'amount',
        'quantity',
        'service_type',
        'pickup_date',
        'delivery_date',
        'status',
    ];
}
