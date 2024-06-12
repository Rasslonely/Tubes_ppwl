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
        'completed'
    ];

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'tanggal' => $this->tanggal,
            'task' => $this->task,
            'completed' => $this->completed,
        ];
    }
}
