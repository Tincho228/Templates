<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
class PostObserver
{

    public function creating(Post $post)
    {
        if(! \App::runningInConsole()){
            $post->user_id = auth()->user()->id;
        }
        
    }

    public function deleting(Post $post)
    {
        Storage::disk('public')->delete('posts',$post->image->url);
        $post->image()->delete();
    }

    
}
