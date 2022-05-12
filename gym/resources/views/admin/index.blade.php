@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <h1>Panel de Control</h1>
@stop

@section('content')
    <p>Haz click en la opcion deseada.</p>
    <div class="d-flex flex-wrap">
    <div class="card text-white bg-success m-3" style="max-width: 18rem;">
        <div class="card-header"><i class="fas fa-users"></i> Usuarios</div>
        <div class="card-body">
          <h5 class="card-title">Success card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="{{route('admin.users.index')}}"type="button" class="btn btn-outline-light">Mostrar lista</a>
          
    </div>
    </div>
    
    <div class="card text-white bg-danger m-3" style="max-width: 18rem;">
        <div class="card-header"><i class="fa fa-database"></i> Categorias</div>
        <div class="card-body">
          <h5 class="card-title">Success card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="{{route('admin.categorias.index')}}"type="button" class="btn btn-outline-light">Mostrar lista</a>
          
    </div>
    </div>
    <div class="card text-white bg-info m-3" style="max-width: 18rem;">
        <div class="card-header"><i class="fa fa-user-plus"></i> Instructores</div>
        <div class="card-body">
          <h5 class="card-title">Success card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="{{route('admin.instructors.index')}}"type="button" class="btn btn-outline-light">Mostrar lista</a>
    </div>
    </div>
    <div class="card text-white bg-secondary m-3" style="max-width: 18rem;">
        <div class="card-header"><i class="fas fa-comment"></i> Posts</div>
        <div class="card-body">
          <h5 class="card-title">Success card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="{{route('admin.posts.index')}}"type="button" class="btn btn-outline-light">Mostrar lista</a>
    </div>
    </div>
    <div class="card text-white bg-teal m-3" style="max-width: 18rem;">
        <div class="card-header"><i class="fa fa-users-cog"></i> Roles</div>
        <div class="card-body">
          <h5 class="card-title">Success card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="{{route('admin.roles.index')}}"type="button" class="btn btn-outline-light">Mostrar lista</a>
    </div>
    </div>
    <div class="card text-white bg-dark m-3" style="max-width: 18rem;">
        <div class="card-header"><i class="fa fa-users-cog"></i> Planes</div>
        <div class="card-body">
          <h5 class="card-title">Success card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href=""type="button" class="btn btn-outline-light">Mostrar lista</a>
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