@extends('layout.head')
@section('page_name', '𝙂𝙖𝙨 𝙇𝙖𝙧𝙖𝙫𝙚𝙡')
@section('estilo_propio', 'css/index.css')
{{--@section('responsive', 'css/index_responsive.css');--}}

@section('content')
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

<style>
    .sections_productos{
        background: white;
    }
</style>

<section class="section" id="part3">
    <h1 class="section_title">CATEGORIAS</h1>

    <div class="container-prod">
        <div class="prod">
           <img src=""> 
           <h4>LLANTAS Y AROS</h4>
           <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, dolor deleniti 
               voluptatem ad quis molestiae enim iure consequatur quos quae, eos eveniet nihil perspiciatis 
               hic aliquam ex consectetur a tenetur?</h3>
           <form action="/productos">
               <input class="input-filtro" name="filtro" type="text" value="LLANTAS Y AROS">
               <button type="submit">Ver más</button>
           </form>
        </div>
    </div>

    <div class="container-prod">
        <div class="prod">
            <img src=""> 
            <h4>BATERIAS PARA AUTOS</h4>
            <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, dolor deleniti 
               voluptatem ad quis molestiae enim iure consequatur quos quae, eos eveniet nihil perspiciatis 
               hic aliquam ex consectetur a tenetur?</h3>
            <form action="/productos">
               <input class="input-filtro" name="filtro" type="text" value="BATERIAS PARA AUTOS">
               <button type="submit">Ver más</button>
           </form>
        </div>
    </div>

    <div class="container-prod">
        <div class="prod">
           <img src=""> 
           <h4>AUDIO Y VIDEO PARA AUTOS</h4>
           <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, dolor deleniti 
               voluptatem ad quis molestiae enim iure consequatur quos quae, eos eveniet nihil perspiciatis 
               hic aliquam ex consectetur a tenetur?</h3>
           <form action="/productos">
               <input class="input-filtro" name="filtro" type="text" value="AUDIO Y VIDEO PARA AUTOS">
               <button type="submit">Ver más</button>
           </form>
        </div>
    </div>

    <div class="container-prod">
        <div class="prod">
           <img src=""> 
           <h4>HERRAMIENTAS</h4>
           <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, dolor deleniti 
               voluptatem ad quis molestiae enim iure consequatur quos quae, eos eveniet nihil perspiciatis 
               hic aliquam ex consectetur a tenetur?</h3>
           <form action="/productos">
               <input class="input-filtro" name="filtro" type="text" value="HERRAMIENTAS">
               <button type="submit">Ver más</button>
           </form>
        </div>
    </div>

    <div class="container-prod">
        <div class="prod">
           <img src=""> 
           <h4>LIMPIEZA</h4>
           <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, dolor deleniti 
               voluptatem ad quis molestiae enim iure consequatur quos quae, eos eveniet nihil perspiciatis 
               hic aliquam ex consectetur a tenetur?</h3>
           <form action="/productos">
               <input class="input-filtro" name="filtro" type="text" value="LIMPIEZA">
               <button type="submit">Ver más</button>
           </form>
        </div>
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
    </div>
    @endforeach
    
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
