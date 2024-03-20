<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'protein',
        'greens',
        'cheese'
    ];

    public static array $signatures = [
        'Longganisa and Caramelized Onions Pizza',
        '4 Cheese Pizza',
        'Hawaiian Pizza',
        'Neapolitan Pizza',
        'Spinach Dip Pizza'
    ];
}
