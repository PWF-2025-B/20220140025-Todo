<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',

        'user_is',

        'is_completed',
    ];

    public function user()
    {

        return $this->belongsTo(User::class);
    }

    public function todos()

    {
        return $this->hasMany(Todo::class);
    }

}

