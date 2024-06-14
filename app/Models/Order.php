<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Order extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'game_id',
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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function toSearchableArray()
    {
        return [
            'status' => $this->status,
            'created_at' => $this->created_at,
            'username' => $this->user->username,
            'game_id' => $this->game_id,
            'total_price' => $this->total_price,
        ];
    }
}
