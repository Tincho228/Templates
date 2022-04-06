<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use App\Models\Gallery;


class CategoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.categorias.index')->only('index');
        $this->middleware('can:admin.categorias.create')->only('create','store');
        $this->middleware('can:admin.categorias.edit')->only('edit','update');
        $this->middleware('can:admin.categorias.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('admin.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'name' => 'required',
            'slug' => 'required|unique:categorias',
            'description'=>'required',
            'price' => 'required',
            'file'=>'image'
        ]);

        $categoria = Categoria::create($request->all());

        if($request->file('file')){
            $url = Storage::disk('public')->put('posts',$request->file('file'));
            $categoria->image()->create([
                'url'=> $url
            ]);
        }else {
            $categoria->image()->create([
                'url' =>'placeholder'
            ]);
        }
        
        return redirect()->route('admin.categorias.edit', $categoria)->with('info', 'La categoria se ha creado con exito');
    }

    public function edit(Categoria $categoria)
    {
        $gallery = Gallery::where('imageable_id',$categoria->id)->get();
        return view('admin.categorias.edit', compact('categoria','gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Categoria $categoria)
    {
        $request ->validate([
            'name' => 'required',
            'slug' => "required|unique:categorias,slug,$categoria->id",
            'description'=>'required',
            'price' => 'required'
        ]);
        $categoria->update($request->all());

        if($request->file('file')){
            $url = Storage::disk('public')->put('posts',$request->file('file'));

            if($categoria->image){
                Storage::disk('public')->delete('posts',$categoria->image->url);
                $categoria->image->update([
                    'url' => $url
                ]);
            }
        }
        return redirect()->route('admin.categorias.edit', $categoria)->with('info', 'La categoria se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        Storage::disk('public')->delete('posts', $categoria->image->url);
        $categoria->image()->delete();
        $categoria->delete();
        
        return redirect()->route('admin.categorias.index')->with('info', 'La categoria se eliminó con exito');
    }
}
