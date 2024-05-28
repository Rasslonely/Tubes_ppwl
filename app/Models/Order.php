<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'username',
        'product_id',
        'quantity',
        'payment_method',
        'total_price',
        'total',
        'status',
    ];

    // Relasi ke model Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
