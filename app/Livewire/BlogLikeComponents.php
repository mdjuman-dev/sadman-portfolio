<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;
use App\Models\BlogLike;
use Illuminate\Support\Facades\Request;

class BlogLikeComponents extends Component
{
    public $blog, $liked, $disliked;

    public function mount(Blog $blog)
    {
        $this->blog = $blog;
        $ip = $this->getIp();

        $this->liked = $blog->isReactedByIp($ip, 'like');
        $this->disliked = $blog->isReactedByIp($ip, 'dislike');
    }

    public function react($type)
    {
        $ip = $this->getIp();

        // delete previous reaction
        BlogLike::where('blog_id', $this->blog->id)
            ->where('ip_address', $ip)
            ->delete();

        // set new reaction
        BlogLike::create([
            'blog_id' => $this->blog->id,
            'ip_address' => $ip,
            'type' => $type,
        ]);

        $this->updateReactionState();
    }

    public function updateReactionState()
    {
        $ip = $this->getIp();
        $this->liked = $this->blog->isReactedByIp($ip, 'like');
        $this->disliked = $this->blog->isReactedByIp($ip, 'dislike');
    }

    public function getIp()
    {
        return Request::ip();
    }

    public function render()
    {
        return view('livewire.blog-like-components', [
            'likeCount' => $this->blog->likes()->count(),
            'dislikeCount' => $this->blog->dislikes()->count(),
        ]);
    }
}
