@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    
<h2>Editar Producto</h2>

<form action="/crud/{{ $producto->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="Producto">Producto</label>
    <input type="text" name="Producto" value="{{$producto->Nombre}}">
    <br>

    <label for="Categoria">Categoria</label>
    <input type="text" name="Categoria" value="{{$producto->Categoria}}">
    <br>

    <label for="Imagen">Imagen</label>
    @if(isset($producto->Imagen_producto))
        <img src="{{ asset('storage').'/'.$producto->Imagen_producto }}" width="100" alt="">
    @endif
    <input type="file" name="Imagen">
    <br>

    <label for="Descripcion">Descripcion</label>
    <input type="text" name="Descripcion" value="{{$producto->Descripcion}}">
    <br>

    <label for="Precio">Precio</label>
    <input type="text" name="Precio" value="{{$producto->Precio}}">
    <br>

    <a href="/crud">Cancelar</a>
    <button type="submit">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop