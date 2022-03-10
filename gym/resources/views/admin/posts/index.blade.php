@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <a class="btn btn-info btn-sm float-right" href="{{route('admin.posts.create')}}">Crear nuevo post</a>
    <h1>Lista de Posts</h1>
    
@stop

@section('content')
    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop