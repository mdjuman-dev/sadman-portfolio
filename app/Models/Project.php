<?php

namespace App\Models;

use App\Models\Technology;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'technology' => 'array',
    ];
}
