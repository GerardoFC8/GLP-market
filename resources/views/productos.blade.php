@extends('layout.head')
@section('page_name')
    {{$productos[0]->Categoria}}
@endsection
@section('estilo_propio', 'css/productos.css')
{{--@section('responsive', 'css/index_responsive.css');--}}

@section('content')
@include('layout.barra_navegacion')

<section class="section section_productos" id="section_productos">
    <h1 class="section_title seccioncompensadora">
        {{$productos[0]->Categoria}}
    </h1>
    <script>
        //EVENTO PARA COMPENSAR FLOAT BAR
        window.addEventListener("scroll", () => {
            const header = document.querySelector("header");

            if (window.pageYOffset > header.offsetTop) {
                document.querySelector(".seccioncompensadora").classList.add("compensar");

            }else{
                document.querySelector(".seccioncompensadora").classList.remove("compensar");
            }
        });
    </script>
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
