<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMailable;
use App\Models\Categoria;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        return view('contacto.index', compact('categorias'));
    }
    public function store(Request $request){
        $request ->validate([
            'name' => 'required',
            'email' => 'required|email',
            'categorias'=>'required',
            'phone'=>'required',
            'body' => 'required'
        ]);
        
        $correo = new ContactoMailable($request->all());
        Mail::to('martinquintero521@gmail.com')->send($correo);
        return redirect()->route('contacto.index')->with('info', 'Mensaje enviado');
    }
}
