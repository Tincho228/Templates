@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <h1>Panel de Control</h1>
@stop

@section('content')
    <p>Haz click en la opcion deseada.</p>
    <div class="d-flex flex-wrap">
    <div class="card text-white bg-success m-3" style="max-width: 18rem;">
        <div class="card-header">Usuarios</div>
        <div class="card-body">
          <h5 class="card-title">Success card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    </div>
    
    <div class="card text-white bg-danger m-3" style="max-width: 18rem;">
        <div class="card-header">Categorias</div>
        <div class="card-body">
          <h5 class="card-title">Success card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    </div>
    <div class="card text-white bg-info m-3" style="max-width: 18rem;">
        <div class="card-header">Instructores</div>
        <div class="card-body">
          <h5 class="card-title">Success card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    </div>
    <div class="card text-white bg-secondary m-3" style="max-width: 18rem;">
        <div class="card-header">Posts</div>
        <div class="card-body">
          <h5 class="card-title">Success card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    </div>
    <div class="card text-white bg-warning m-3" style="max-width: 18rem;">
        <div class="card-header">Posts</div>
        <div class="card-body">
          <h5 class="card-title">Success card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop