<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BlogComment;

class Comment extends Component
{

    public $blog_id, $name, $email, $message;

    protected $rules = [
        'name' => 'required|string|max:100',
        'email' => 'required|email',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();
        BlogComment::create([
            'blog_id' => $this->blog_id,
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);
        $this->dispatch('comment-success');
        $this->reset(['name', 'email', 'message']);
    }

    public function getCommentsProperty()
    {
        return BlogComment::where('blog_id', $this->blog_id)->latest()->get();
    }

    public function render()
    {
        return view('livewire.comment', [
            'comments' => $this->comments,
        ]);
    }
}
