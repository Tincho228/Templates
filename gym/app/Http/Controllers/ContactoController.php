<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index(){
        return view('contacto.index');
    }
    public function store(){
        $correo = new ContactoMailable;
        Mail::to('martinquintero521@gmail.com')->send($correo);
        return "correo exitoso";
    }
}
