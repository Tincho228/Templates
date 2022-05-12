@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <h1>Mis lista de Planes</h1>
@stop

@section('content')
    
<div class="card">
    <div class="card-header">
        <a class="btn btn btn-info btn-sm float-right" href="{{route('admin.plans.create')}}">Crear categoria</a>
        </div>
    @if($plans->count())
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
                @foreach ($plans as $plan)
                <tr>
                    <td>{{$plan->id}}</td>
                    <td>{{$plan->name}}</td>
                    <td>{{$plan->description}}</td>
                    <td>{{$plan->price}}</td>
                    <td width="10px"><a class="btn btn-sm btn-secondary" href="{{route('admin.plans.edit', $plan)}}">Editar</a></td>
                    <td width="10px">
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteCategory{{$plan->id}}">Borrar</button>               
                    </td>
                </tr>
                @include('admin.plans.partials.modal-delete')
                @endforeach
            </tbody>

        </table>

  
  
  </div>
    @else
    <div class="card-body">
        <div class="alert alert-secondary">No hay categorias</div>
    </div>
    @endif
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop