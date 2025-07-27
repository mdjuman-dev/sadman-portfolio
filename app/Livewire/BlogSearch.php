<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogSearch extends Component
{
    public $search = '';


    public function render()
    {

        $blogs = Blog::where('title', 'like', '%' . $this->search . '%')
            ->orWhere('content', 'like', '%' . $this->search . '%')
            ->where('status', true)
            ->latest()
            ->get();

        return view('livewire.blog-search', [
            'blogs' => $blogs,
        ]);
    }
}
