<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'city',
        'postal_code',
        'country',
        'region_state',
        'adults',
        'children',
        'room',
        'extra_services',
    ];
}
