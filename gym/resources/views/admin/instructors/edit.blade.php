@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <h1>Editar Instructor</h1>
@stop

@section('content')
@if(session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif
<div class="card">
        <div class="card-body">
            {!! Form::model($instructor, ['route' => ['admin.instructors.update', $instructor],'files'=>true, 'method'=>'put'])  !!}
                
                @include('admin.instructors.partials.form')
            
                {!! Form::submit('Enviar formulario', ['class' => 'btn btn-sm btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
        document.getElementById('file').addEventListener('change', cambiarImagen);

        function cambiarImagen(event) {
            var file = event.target.files[0];
            let reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById('picture').setAttribute('src', event.target.result);
            }
            reader.readAsDataURL(file);
        }
    </script>
@stop