@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    
<a href="crud/create">CREAR</a>

<table id="productos">
    <thead>
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Imagen</th>
            <th>Catergoria</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Producto as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->Nombre }}</td>
            <td><img src="{{asset('storage').'/'.$producto->Imagen_producto}}" alt="" width="100px"></td>
            <td>{{ $producto->Categoria }}</td>
            <td>{{ $producto->Descripcion }}</td>
            <td>{{ $producto->Precio }}</td>
            <td>
                <form action="{{ route('crud.destroy', $producto->id) }}" method="POST">
                    <a href="/crud/{{ $producto->id }}/edit">Editar</a>
                @csrf
                @method('DELETE')
                    <button type="submit">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready (function () {
            $('#productos').DataTable();
        });
    </script>

@stop