<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Gallery;

class CategoriaController extends Controller
{
    public function index()
    {
        //
    }
    public function show(Categoria $categoria)
    {
        $gallery = Gallery::where('imageable_id',$categoria->id)->get();
        return view('categoria.show',compact('categoria','gallery'));
    }
}
