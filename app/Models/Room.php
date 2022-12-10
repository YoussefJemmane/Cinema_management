<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public function movies()
    {
        return $this->belongsTo(Movie::class, 'movie');
    }
    protected $fillable = [
        'no_room',
        'no_chairs',
        'movie',
    ];


}
