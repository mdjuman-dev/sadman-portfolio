<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogLike extends Model
{
    protected $guarded = ['ip'];
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
