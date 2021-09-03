@extends('layout.head')
@section('page_name', '𝙂𝙖𝙨 𝙇𝙖𝙧𝙖𝙫𝙚𝙡')
@section('estilo_propio', '../css/index.css');

@section('header')
    <header>
        <div>
            header
        </div>
    </header>
@endsection
@section('content')
<section id="part1">
    <div class="container-all">
        <div class="container-frase">
            <h1>FRASE PARA EL CARRO</h1>
        </div>
        <div class="container-img">
        </div>
    </div>
</section>
<section id="part2">
    <h1>PRODUCTOS</h1>
    <div class="container-prod">
        <div class="prod">
           <img src="../image/herramientas2-Producto.jpg">
           <h4>Herramientas</h4>
           <a href="#">Ver más</a>
        </div>

        <div class="prod">
            <img src="../image/autopartes-Producto.jpg">
            <h4>Auto partes</h4>
            <a href="#">Ver más</a>
        </div>

        <div class="prod">
            <img src="../image/llantas-Producto.jpg">
            <h4>Llantas</h4>
            <a href="#">Ver más</a>
        </div>
    </div>
</section>
<section id="part3">
    <h1>SERVICIOS</h1>
    <div class="container-prod">
        <div class="prod">
           <img src="../image/mantenimiento-Servicio.jpg">
           <h4>Mantenimiento General</h4>
           <a href="#">Ver más</a>
        </div>

        <div class="prod">
            <img src="../image/instalacion-Servicio.jpg">
            <h4>Instalacion de GLP</h4>
            <a href="#">Ver más</a>
        </div>

        <div class="prod">
            <img src="../image/limpieza-Servicio.jpg">
            <h4>Limpieza</h4>
            <a href="#">Ver más</a>
        </div>
    </div>
</section>
<br>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v11.0&appId=3114165578806569&autoLogAppEvents=1" nonce="vffXfQKo"></script>
<section id="part4">
    <h1>OPINIONES</h1>
    <div class="usuario">
      <img src="../image/usuario-Opinion.jpg">
      <h2>Nombre</h2>
    </div>
    <br>
    <br>
    <div class="usuario">
        <img src="../image/usuario-Opinion.jpg">
        <h2>Nombre</h2>
    </div>
</section>
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