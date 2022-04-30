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

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categorias as $categoria)
                <tr>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->name}}</td>
                    <td>{{$categoria->description}}</td>
                    <td>{{$categoria->price}}</td>
                    <td width="10px"><a class="btn btn-sm btn-secondary" href="{{route('admin.categorias.edit', $categoria)}}">Editar</a></td>
                    <td width="10px">
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteCategory{{$categoria->id}}">Borrar</button>               
                    </td>
                </tr>
                @include('admin.categorias.partials.modal-delete')
                @endforeach
            </tbody>

        </table>

  
  
  </div>
</div>
 

@stop

@section('css')

@stop

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

</script>
@stop
