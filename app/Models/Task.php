<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Task extends Model
{
    use HasFactory, Searchable;

    protected $table = 'tasks';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'tanggal',
        'task',
    ];

    public function toSearchableArray()
    {
        return [
            'task' => $this->task,
        ];
    }
}
