<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Category extends Model
{
    use HasFactory, Searchable;

    protected $table = 'categories';
    protected $fillable = [
        'category',
        'image',
    ];

    public function toSearchableArray(){
        return [
            'category' => $this->category,
        ];
    }
}
