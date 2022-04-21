@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
<h1>Lista de categorias</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
    <div class="card-header">
        <a class="btn btn btn-info btn-sm float-right" href="{{route('admin.categorias.create')}}">Crear categoria</a>
        </div>
    <div class="card-body d-flex flex-wrap ">
        @foreach ($categorias as $categoria)
        <div class="card m-1" style="width: 18rem;">
            @if ($categoria->image->url == "placeholder")
            <img class="card-img-top" src="https://images.pexels.com/photos/669582/pexels-photo-669582.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">    
            <div class="bg-dark text-center p-2"> 
                Sin imagen
            </div>
            @else
            <img class="card-img-top" src="{{Storage::URL($categoria->image->url)}}" alt="Card image cap">
            
            @endif
            
            <div class="card-body">
                <h5 class="card-title">{{$categoria->id}} - <strong>Nombre:</strong> {{$categoria->name}}</h5>
                <p class="card-text"><strong>Descripcion:</strong> {{$categoria->description}}</p>
                <p class="card-text"><strong>Precio:</strong> {{$categoria->price}}</p>
            </div>
            <div class="card-footer d-flex justify-content-end">
                <a class="btn btn-sm btn-secondary mr-1" href="{{route('admin.categorias.edit', $categoria)}}">Editar</a>
                <form action="{{route('admin.categorias.destroy', $categoria)}}" method="POST">
                    @csrf 
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm mr-2">Eliminar</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop

@section('css')

@stop

@section('js')
<script>
    console.log('Hi!');

</script>
@stop
