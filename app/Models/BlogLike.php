<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogLike extends Model
{
    protected $guarded = ['ip'];
    public function likes()
    {
        return $this->hasMany(BlogLike::class);
    }

    public function totalLikes()
    {
        return $this->likes()->count();
    }

    public function isLikedByIp($ip)
    {
        return $this->likes()->where('ip_address', $ip)->exists();
    }
}
