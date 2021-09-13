@extends('layout.head')
@section('page_name')
    Productos de {{$productos[0]->Categoria}}
@endsection
@section('estilo_propio', 'css/productos.css')
{{--@section('responsive', 'css/index_responsive.css');--}}
@section('content')
<section class="section section_productos" id="section_productos">
    <h1 class="section_title">
        {{$productos[0]->Categoria}}
    </h1>

    @foreach($productos as $product)
        <div class="container_productos">
            <div class="unidad_productos">
                <img src="{{asset('storage').'/'.$product->Imagen_producto}}" alt="">
                <h4>{{$product->Nombre}}</h4>
                <h5>{{$product->Descripcion}}</h5>
                <a href="#">Agregar al carrito</a>
            </div>
        </div>
    @endforeach

</section>
@endsection