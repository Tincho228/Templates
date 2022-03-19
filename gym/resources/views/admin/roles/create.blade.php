@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <h1>Crear nuevo rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body"> 
            {!! Form::open(['route'=> 'admin.roles.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre del rol']) !!}
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            

            <h2 class="h3 mt-2">Lista de permisos</h2>
            @foreach($permissions as $permission)

            <div>
                <label for="">
                    {!! Form::checkbox('$permissions[]','$permission->id',null,['class'=>'mr-1']) !!}
                    {{$permission->description}}
                </label>
            </div>

            @endforeach
            {!! Form::submit('Crear Rol',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
       
    </div>
@stop

