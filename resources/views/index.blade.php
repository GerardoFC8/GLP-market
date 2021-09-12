@extends('layout.head')
@section('page_name', '𝙂𝙖𝙨 𝙇𝙖𝙧𝙖𝙫𝙚𝙡')
@section('estilo_propio', 'css/index.css')
{{--@section('responsive', 'css/index_responsive.css');--}}

@section('content')

{{--###################### MAIN SECTION ######################--}}
<section class="section_main" id="main_screen">
    <div class="main_container">
        <div class="container-frase">
            <h1>
                <span>Lorem ipsum dolor sit amet, consectetur.</span>
            </h1>
        </div>
        <div class="container-img">
            <img src="image/carro-remove.png" alt="imagen auto principal">
        </div>
    </div>
</section>

{{--###################### BARRA DE NAVEGACION ######################--}}
@include('layout.barra_navegacion')
{{--###################### SOBRE NOSOTROS ######################--}}
<div class="sobre_nosotros">
    <div class="sobre_n_text">
        <h1>Sobre nosotros.</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae ea, et corrupti incidunt, quae vero delectus maiores animi consequatur, ipsam quibusdam assumenda! Eos, laborum reprehenderit tenetur libero nulla iure officia sunt</p>
    </div>
    <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.64359146641!2d-77.06453438484249!3d-11.99914529149905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce568c042771%3A0x6072f46c2b26e80!2sSENATI!5e0!3m2!1sen!2spe!4v1631381026332!5m2!1sen!2spe" 
        width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy" title="mapa sobre nosotros"></iframe>
    </div>
</div>

{{--###################### SEGUNDA IMAGEN ######################--}}
<section class="section section_video">
    <div class="segunda_container">
         <video width="100%" autoplay muted loop>
            <source src="image/video_bg.mp4" type="video/mp4">
        </video> 
    </div>
</section>

{{--###################### PRODUCTOS ######################--}}
<section class="section section_productos" id="section_productos">
    <h1 class="section_title"><span>PRODUCTOS</span></h1>
    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad reiciendis quasi sapiente laboriosam quod qui! Veniam eligendi qui iusto nobis.</h2>
    <div class="lista_marcas">
        <div class="lista_marcas_container">
            <img src="image/marca_logo1.png" alt="marca">
            <img src="image/marca_logo2.png" alt="marca">
            <img src="image/marca_logo3.png" alt="marca">
            <img src="image/marca_logo4.png" alt="marca">
            <img src="image/marca_logo5.png" alt="marca">
            <img src="image/marca_logo6.png" alt="marca">
            <img src="image/marca_logo7.png" alt="marca">
            <img src="image/marca_logo8.png" alt="marca">
            <img src="image/marca_logo9.png" alt="marca">
            <img src="image/marca_logo10.png" alt="marca">
        </div>
    </div>

    <div class="categorias_container">

        <a href="/productos?filtro=LLANTAS+Y+AROS">
            <div class="categoria_unidad">
                <div class="categoria_imagen">
                    <img src="image/herramientas2-Producto.jpg">
                </div>
            <h2>LLANTAS Y AROS</h2>
            </div>
        </a>

    </div>

    <div class="categorias_container">

        <a href="/productos?filtro=BATERIAS+PARA+AUTOS">
            <div class="categoria_unidad">
                <div class="categoria_imagen">
                    <img src="image/herramientas2-Producto.jpg">
                </div>
            <h2>BATERIAS PARA AUTOS</h2>
            </div>
        </a>

    </div>

    <div class="categorias_container">

        <a href="/productos?filtro=AUDIO+Y+VIDEO">
            <div class="categoria_unidad">
                <div class="categoria_imagen">
                    <img src="image/herramientas2-Producto.jpg">
                </div>
            <h2>AUDIO Y VIDEO</h2>
            </div>
        </a>

    </div>

    <div class="categorias_container">

        <a href="/productos?filtro=Herramientas">
            <div class="categoria_unidad">
                <div class="categoria_imagen">
                    <img src="image/herramientas2-Producto.jpg">
                </div>
            <h2>Herramientas</h2>
            </div>
        </a>

    </div>

    <div class="categorias_container">

        <a href="/productos?filtro=LIMPIEZA">
            <div class="categoria_unidad">
                <div class="categoria_imagen">
                    <img src="image/herramientas2-Producto.jpg">
                </div>
            <h2>LIMPIEZA</h2>
            </div>
        </a>

    </div>

</section>

{{--###################### SERVICIOS ######################--}}
<section class="section" id="part3">
    <h1 class="section_title">SERVICIOS</h1>

    @foreach($servicios as $servicio)
    <div class="container-prod">
        <div class="prod">
           <img src="data:image/jpg;base64,<?php echo(base64_encode($servicio->imagen))?>" alt=""> 
           <h4>{{ $servicio->nombre }}</h4>
           <h3>{{ $servicio->descripcion }}</h3>
           <a href="#">Ver más</a>
        </div>
    @endforeach

</section>

{{--###################### FOOTER ######################--}}
<footer class="footer">
    <div class="container-footer">
        <div class="row">
            <div class="footer-col">
                <h4>company</h4>
                <ul class="texto-footer">
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">affiliate program</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>get help</h4>
                <ul class="texto-footer">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>online shop</h4>
                <ul class="texto-footer">
                    <li><a href="#">watch</a></li>
                    <li><a href="#">bag</a></li>
                    <li><a href="#">shoes</a></li>
                    <li><a href="#">dress</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="redes-sociales">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

@endsection
