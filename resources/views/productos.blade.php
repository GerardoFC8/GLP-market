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
                        <h3 class="showligthbox" id="<?=$product->id?>">{{ $product->Nombre }}</h3>
                        <p class="showligthbox" id="<?=$product->id?>">{{ $product->Descripcion }}</p>
                        <h2 class="showligthbox" id="<?=$product->id?>">S/.{{ $product->Precio }}</h2>

                        <form action="" method="post">
                            @csrf
                            <input type="hidden" name="producto" value="{{ $product->Nombre }}">
                            <input type="hidden" name="Precio" value="{{ $product->Precio }}">
                            
                            <input type="number" name="cantidad" value="1">
                            <input type="submit" value="Agregar" name="btnAgregar" class="btnAgre">
                        </form>
                    </div>
                    
                    <div class="ligthbox_container">
                        <div class="ligthbox<?=$product->id?> ligthbox" style="visibility: hidden;">
                            <img src="{{asset('storage').'/'.$product->Imagen_producto}}" alt="imagen producto ligthbox">
                        </div>
                    </div>

                    <script>
                        document.querySelector(".ligthbox<?=$product->id?>").addEventListener('click', () =>{
                            document.querySelector(".ligthbox<?=$product->id?>").style.visibility = "hidden";
                        });
                    </script>
                </div>
            </div>
        @endforeach
    </div>
</section>


<?php 
    if (isset($_REQUEST["btnAgregar"])) {
        $producto = $_REQUEST["producto"];
        $precio = $_REQUEST["Precio"];
        $cantidad = $_REQUEST["cantidad"];

        $_SESSION["carrito"][$producto]["cantidad"] = $cantidad;
        $_SESSION["carrito"][$producto]["precio"] = $precio;
        
        echo "<script>alert('Producto $producto agregado con exito al carrito de compras');</script>";
    }
?>

<script>
    const botones = document.querySelectorAll(".showligthbox");

    botones.forEach((item) => {
        item.addEventListener("click", () => {
            document.querySelector(".ligthbox"+item.id).style.visibility = "visible";
            console.log("click in"+item.id);
        })
    });
</script>


@include('layout.footer')
@endsection
