<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }
    // Crear una categoria
    public function create(){
        return view('categorias.create');
    }
    // Mostrar una sola categoria
    public function show(Categoria $categoria){
        return view('categorias.show', compact('categoria'));
    }
}
