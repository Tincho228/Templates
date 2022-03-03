<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        return view('categorias.index');
    }
    // Crear una categoria
    public function create(){
        return view('categorias.create');
    }
    // Mostrar una sola categoria
    public function show($categoria){
        return view('categorias.show', compact('categoria'));
    }
}
