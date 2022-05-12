@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <h1>Editar plan</h1>
@stop

@section('content')


@if(session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif
<div class="card">
        <div class="card-body">
            {!! Form::model($plan, ['route' => ['admin.plans.update', $plan],'method'=>'put']) !!}
                
                @include('admin.plans.partials.form')

                {!! Form::submit('Actualizar plan', ['class' => 'btn btn-sm btn-primary']) !!}
            {!! Form::close() !!}
                
        </div>
        
</div>

@stop

@section('css')
    
@stop

@section('js')
    
@stop