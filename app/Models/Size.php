<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Size extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public static array $sizes = [
        'Small',
        'Medium',
        'Large'
    ];

    public function order() {
        return $this->hasMany(Order::class);
    }
}
