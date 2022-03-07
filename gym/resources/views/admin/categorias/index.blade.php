@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
<h1>Mostrar listas de categorias</h1>
@stop

@section('content')
<p>Welcome to this beautiful admin panel.</p>
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
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
                    <th scope="row">1</th>
                    <td>{{$categoria->name}}</td>
                    <td>{{$categoria->description}}</td>
                    <td>{{$categoria->price}}</td>
                    <td><a class="btn btn-sm btn-secondary" href="{{route('admin.categorias.edit', $categoria)}}">Editar</a></td>
                    <td><a class="btn btn-sm btn-danger mr-2" href="">Eliminar</a></td>


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
