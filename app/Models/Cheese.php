<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cheese extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public static array $cheeses = [
        'Cheddar',
        'Mozzarella',
        'Gouda',
        'Jack'
    ];

    public function order() {
        return $this->hasMany(Order::class);
    }
}
