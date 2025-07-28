<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;

class technology extends Model
{
    protected $guarded = ['id'];

    function project()
    {
        return $this->hasMany(Project::class);
    }
}
