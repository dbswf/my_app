<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Training extends Model
{
    use HasFactory;
    protected $fillable = [
        'part_id',
        'name',
        'body',
        'photo',
        'image_url',
        'movie_code'
    ];
    
}
