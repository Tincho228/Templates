@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <h1>Crear una nueva categoria</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.categorias.store','files'=>true]) !!}
                
                @include('admin.categorias.partials.form')

                {!! Form::submit('Crear categoria', ['class' => 'btn btn-sm btn-primary']) !!}
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
    document.getElementById('file').addEventListener('change', cambiarImagen);
    function cambiarImagen(event){
        var file = event.target.files[0];
        let reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById('picture').setAttribute('src', event.target.result);
        }
        reader.readAsDataURL(file);
    }
    </script>
@stop