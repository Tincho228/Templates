@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content')
<h1>Bienvenido a la pagina principal de categorias</h1>

<a class="btn btn-success mb-10" href="{{route('categorias.create')}}">Crear nueva categoria</a>

<table class="table table-striped">
  <thead>
    <tr class="text-center">
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  
  <tbody >
  @foreach ($categorias as $categoria)
    <tr>
      <th scope="row">1</th>
      <td>{{$categoria->name}}</td>
      <td>{{$categoria->description}}</td>
      <td>{{$categoria->price}}</td>
      <td><a class="btn btn-sm btn-secondary" href="">Ver</a></td>
      <td><a class="btn btn-sm btn-secondary" href="">Editar</a></td>
      <td><a class="btn btn-sm btn-danger mr-2" href="">Eliminar</a></td>
      
      
    </tr>
    @endforeach
  </tbody>
  
</table>

@endsection