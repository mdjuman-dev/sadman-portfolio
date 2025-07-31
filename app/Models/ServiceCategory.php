<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $guarderd = ['id'];

    function services()
    {
        return $this->hasMany(Servics::class);
    }
}
