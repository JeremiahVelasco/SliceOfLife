<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Greens extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public static array $greens = [
        'Spinach',
        'Broccoli',
        'Arugula'
    ];

    public function order() {
        return $this->hasMany(Order::class);
    }
}
