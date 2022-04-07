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
    <div class="card-body">

        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categorias as $categoria)
                <tr>
                    <th scope="row">{{$categoria->id}}</th>
                    <td>{{$categoria->name}}</td>
                    <td>{{$categoria->description}}</td>
                    <td>{{$categoria->price}}</td>
                    <td><a class="btn btn-sm btn-secondary" href="{{route('admin.categorias.edit', $categoria)}}">Editar</a></td>
                    <td>
                        <form action="{{route('admin.categorias.destroy', $categoria)}}" method="POST">
                            @csrf 
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm mr-2">Eliminar</button>
                        </form>
                
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');

</script>
@stop
