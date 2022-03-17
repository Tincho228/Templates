@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <h1>Crear un Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            
            {!! Form::open(['route' => 'admin.posts.store','files'=>true]) !!}

                {!! Form::hidden('user_id',auth()->user()->id) !!}    

                @include('admin.posts.partials.form')

                <div class="row mb-3">
                    <div class="col">
                        <div class="img-wrapper">
                            <img id="picture" class="img-fluid" src="https://images.pexels.com/photos/1552242/pexels-photo-1552242.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('file','Imagen') !!}
                            {!! Form::file('file',['class'=>'form-control-file mb-3']) !!}
                            <div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius possimus obcaecati delectus exercitationem, accusamus eaque!</div>
                        </div>
                    </div>
                </div>
                
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

@section('css')
    <style>
        
    </style>
@stop
