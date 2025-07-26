<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;
use App\Models\BlogLike;
use Illuminate\Support\Facades\Request;

class BlogLikeComponents extends Component
{
    public $blog;
    public $liked;

    public function mount(Blog $blog)
    {
        $this->blog = $blog;
        $this->liked = $blog->isLikedByIp($this->getIp());
    }

    public function toggleLike()
    {
        $ip = $this->getIp();

        $like = BlogLike::where('blog_id', $this->blog->id)
            ->where('ip_address', $ip)
            ->first();

        if ($like) {
            $like->delete();
            $this->liked = false;
        } else {
            BlogLike::create([
                'blog_id' => $this->blog->id,
                'ip_address' => $ip,
            ]);
            $this->liked = true;
        }
    }

    public function getIp()
    {
        return Request::ip();
    }

    public function render()
    {
        return view('livewire.blog-like-components', [
            'likeCount' => $this->blog->likes()->count(),
        ]);
    }
}
