<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    // show room from Room
    public function room()
    {
        return $this->hasMany(Room::class);
    }
    // protected fillable from movie table
    protected $fillable = [
        'title',
        'genre',
        'des',
        'poster',
        'director',
    ];
}
