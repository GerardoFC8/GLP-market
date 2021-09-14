@extends('layout.head')
@section('page_name')
    {{$productos[0]->Categoria}}
@endsection
@section('estilo_propio', 'css/productos.css')
{{--@section('responsive', 'css/index_responsive.css');--}}
@include('layout.barra_navegacion')
@section('sub_barra')
    @include('layout.sub_barra_navegacion')
@endsection
@section('content')
<section class="section section_productos" id="section_productos">
    <h1 class="section_title">
        {{$productos[0]->Categoria}}
    </h1>

    <div class="container_productos">

        @foreach($productos as $product)
            <div class="container_unidad">
                <div class="box-all">
                    <div class="imgBx">
                        <img src="{{asset('storage').'/'.$product->Imagen_producto}}" alt="unidad producto">
                    </div>
                    <div class="box-contenido">
                        <h3>{{ $product->Nombre }}</h3>
                        <p>{{ $product->Descripcion }}</p>
                        <h2>S/.{{ $product->Precio }}</h2>
                        
                        <a href="#" class="agregar_carro">
                            <div class="texto_agregar">
                                    <span>Agregar al carrito</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

</section>
@include('layout.footer')
@endsection