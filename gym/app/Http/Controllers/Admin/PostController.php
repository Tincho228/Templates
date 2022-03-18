<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.posts.index')->only('index');
        $this->middleware('can:admin.posts.create')->only('create','store');
        $this->middleware('can:admin.posts.edit')->only('edit','update');
        $this->middleware('can:admin.posts.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::pluck('name', 'id');
        
        return view('admin.posts.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = Post::create($request->all());

        if($request->file('file')){
            $url = Storage::disk('public')->put('posts',$request->file('file'));
            $post->image()->create([
                'url'=> $url
            ]);
        }else {
            $post->image()->create([
                'url' =>'placeholder'
            ]);
        }
        return redirect()->route('admin.posts.edit', $post);   
        
    }

    public function edit(Post $post)
    {
        $this->authorize('author', $post);

        $categorias = Categoria::pluck('name', 'id');
        return view('admin.posts.edit', compact('post', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $this->authorize('author', $post);
        $post->update($request->all());
        if($request->file('file')){
            $url = Storage::disk('public')->put('posts',$request->file('file'));

            if($post->image){
                Storage::disk('public')->delete('posts',$post->image->url);
                $post->image->update([
                    'url' => $url
                ]);
            }
        }
        return redirect()->route('admin.posts.edit',$post)->with('info','El post se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('author', $post);
        $post->delete();
        
        return redirect()->route('admin.posts.index')->with('info', 'El post se eliminó con exito');
    }
}
