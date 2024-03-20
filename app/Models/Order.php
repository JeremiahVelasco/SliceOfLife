<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'size',
        'protein',
        'greens',
        'cheese',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function size() 
    {
        return $this->belongsTo(Size::class);
    }

    public function protein() 
    {
        return $this->belongsTo(Protein::class);
    }

    public function greens() 
    {
        return $this->belongsTo(Greens::class);
    }

    public function cheese() 
    {
        return $this->belongsTo(Cheese::class);
    }
}
