@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <h1>Administrador</h1>
@stop

@section('content')
<div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.instructors.store']) !!}
                
                @include('admin.instructors.partials.form')
            
                {!! Form::submit('Enviar formulario', ['class' => 'btn btn-sm btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready( function() {
             $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
  });
});
    </script>
@stop