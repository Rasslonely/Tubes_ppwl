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
        'category_id',
        'package',
        'price',
    ];

    public function toSearchableArray(){
        return [
            'title' => $this->title,
            'package' => $this->package,
            'price' => $this->price,
        ];
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
