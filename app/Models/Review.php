<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'name',
        'profetion',
        'message',
        'image',
        'rating',
        'status',
    ];
}
