<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Instructor;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        $categorias = Categoria::all();
        $instructors = Instructor::all();
        return view('posts.index', compact('posts', 'categorias','instructors'));
    }
}
