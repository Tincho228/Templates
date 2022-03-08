@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <h1>Mostrar listado de Instructores</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
    <div class="card-header">
    <a class="btn btn btn-info btn-sm" href="{{route('admin.instructors.create')}}">Crear instructor</a>
    </div>
    <div class="card-body">

        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Descripcion</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($instructors as $instructor)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$instructor->name}}</td>
                    <td>{{$instructor->slug}}</td>
                    <td>{{$instructor->description}}</td>
                    <td><a class="btn btn-sm btn-secondary" href="{{route('admin.instructors.edit', $instructor)}}">Editar</a></td>
                    <td>
                        <form action="{{route('admin.instructors.destroy', $instructor)}}" method="POST">
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
