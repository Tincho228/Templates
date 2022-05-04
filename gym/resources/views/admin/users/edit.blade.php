@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')
    @if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre:</p>
            <p class="form-control">{{$user->name}}</p>

            {!! Form::model($user,['route'=>['admin.users.update',$user],'method'=>'put']) !!}
                <p>Asignar permisos</p>
                @foreach($roles as $role)

                    <div>
                        <label>
                            {!! Form::checkbox('roles[]',$role->id,null,['class'=>'mr-1']) !!}
                            {{$role->name}}
                        </label>
                    </div>

                @endforeach
                {!! Form::submit('Asignar rol',['class'=>'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <p class="h5">Categoria</p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Categoria 1
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Categoria 2
                </label>
            </div>
            
            
            
        </div>
        <div class="card-footer">
            <button class="btn btn-submit btn-primary">Asignar categoria</button> 
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <p class="h5">Plan</p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Plan Semanal</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Plan 30 dias</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Plan 6 Meses</label>
              </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-submit btn-primary">Asignar categoria</button> 
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop