<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protein extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public static array $proteins = [
        'Pepperoni',
        'Sausage',
        'Ham',
        'Bacon',
        'Mushrooms',
        'Beef'
    ];

    public function order() {
        return $this->hasMany(Order::class);
    }
}
