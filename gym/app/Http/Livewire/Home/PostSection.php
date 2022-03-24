<?php

namespace App\Http\Livewire\Home;

use App\Models\Post;
use Livewire\Component;

class PostSection extends Component
{
    public function render()
    {
        $posts = Post::all();
        return view('livewire.home.post-section',compact('posts'));
    }
}
