<?php

namespace App\Http\Livewire\Home;

use App\Models\Categoria;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class PostSection extends Component
{
    
    public function render()
    {
        $users = User::all();
        $posts = Post::all();
        return view('livewire.home.post-section',compact('posts','users'));
    }
    public function getUser($post){
        $user = User::where('id',$post)->get();
        return new Collection($user);
    }
    public function getCategoria($post){
        $categoria = Categoria::where('id',$post)->get();
        return new Collection($categoria);
    }
}
