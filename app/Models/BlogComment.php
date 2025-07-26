<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;

    protected $fillable = ['blog_id', 'name', 'email', 'message'];
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
