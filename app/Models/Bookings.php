<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone',
        'pickup_location',
        'dropoff_location',
        'departure_date',
        'return_date',
        'requirements',
        'notes',
        'status',
    ];

    protected $casts = [
        'departure_date' => 'date',
        'return_date' => 'date',
    ];
}
