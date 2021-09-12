@extends('layout.head')
@section('page_name', '𝙂𝙖𝙨 𝙇𝙖𝙧𝙖𝙫𝙚𝙡')
@section('estilo_propio', 'css/index.css')
{{--@section('responsive', 'css/index_responsive.css');--}}

<section class="section section_productos" id="section_productos">
    <h1 class="section_title">PRODUCTOS</h1>

    @foreach($productos as $product)

    <div class="container-prod">
        <div class="prod">
            <img src="{{asset('storage').'/'.$product->Imagen_producto}}" alt="">
            <h4>{{$product->Nombre}}</h4>
            <h5>{{$product->Descripcion}}</h5>
            <a href="#">Ver más</a>
        </div>
    </div>

    @endforeach

</section>
