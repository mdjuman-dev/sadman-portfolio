<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = ['id'];

    public function comments()
    {
        return $this->hasMany(BlogComment::class)->latest();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function totalLikes()
    {
        return $this->likes()->count();
    }

    public function isLikedByIp($ip)
    {
        return $this->likes()->where('ip_address', $ip)->exists();
    }
    public function likes()
    {
        return $this->hasMany(BlogLike::class)->where('type', 'like');
    }

    public function dislikes()
    {
        return $this->hasMany(BlogLike::class)->where('type', 'dislike');
    }

    public function isReactedByIp($ip, $type)
    {
        return $this->hasMany(BlogLike::class)
            ->where('ip_address', $ip)
            ->where('type', $type)
            ->exists();
    }
    public function views()
    {
        return $this->hasMany(BlogView::class);
    }
}
