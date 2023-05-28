<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = [
        'room',
        'name',
        'email',
        'checkin_date',
        'checkout_date',
    ];
}
