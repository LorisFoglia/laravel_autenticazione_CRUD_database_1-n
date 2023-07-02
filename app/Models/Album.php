<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'user_id',
        'genre_id',
        'name',
        'author',
        'year',
        'description',
        'img',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function genre(){
        return $this->belongsTo(Genre::class);
    }
}
