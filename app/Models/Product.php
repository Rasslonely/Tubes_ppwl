<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory, Searchable, SoftDeletes;
    protected $table = 'products';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'title',
        'category',
        'package',
        'price',
    ];

    public function toSearchableArray(){
        return [
            'title' => $this->title,
            'category' => $this->category,
            'package' => $this->package,
            'price' => $this->price,
        ];
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
