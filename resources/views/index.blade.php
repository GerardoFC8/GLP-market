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
    <div class="container-serv">
      <div class="box-all">
        <div class="imgBx">
          <img src="image/mantenimiento-Servicio.jpg">
          <a href="/productos?filtro=LLANTAS+Y+AROS">
        </div>
        <div class="box-contenido">
          <h3>LLANTAS Y AROS</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="box-all">
        <div class="imgBx">
          <img src="image/mantenimiento-Servicio.jpg">
          <a href="/productos?filtro=BATERIAS+PARA+AUTOS">
        </div>
        <div class="box-contenido">
          <h3>BATERIAS PARA AUTOS</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="box-all">
        <div class="imgBx">
          <img src="image/mantenimiento-Servicio.jpg">
          <a href="/productos?filtro=AUDIO+Y+VIDEO">
        </div>
        <div class="box-contenido">
          <h3>AUDIO Y VIDEO</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="box-all">
        <div class="imgBx">
          <img src="image/mantenimiento-Servicio.jpg">
          <a href="/productos?filtro=LIMPIEZA">
        </div>
        <div class="box-contenido">
          <h3>LIMPIEZA</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="box-all">
        <div class="imgBx">
          <img src="image/mantenimiento-Servicio.jpg">
          <a href="/productos?filtro=Herramientas">
        </div>
        <div class="box-contenido">
          <h3>HERRAMIENTAS</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>

    </div>

</section>

{{--###################### SERVICIOS ######################--}}


<section class="section section_servicios">
<h1 class="section_title"><span>SERVICIOS</span></h1>
<div class="container-serv">     
    @foreach($servicios as $servicio)
    <div class="box-all">
        <div class="imgBx">
            <img src="data:image/jpg;base64,<?php echo(base64_encode($servicio->imagen))?>" alt="" width="200px"> 
        </div>
        <div class="box-contenido">
            <h4>{{ $servicio->nombre }}</h4>
            <p>{{ $servicio->descripcion }}</p>
        </div>
    </div>
    @endforeach
</div>
</section>

<!---comentarios--->
<section class="section">
<div class="comentarios">
<div id="disqus_thread"></div>
<script>
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://gas-laravel-1.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>
</section>

<!--- fin de comentarios--->

{{--###################### FOOTER ######################--}}
<footer class="footer">
    <div class="container-footer">
    <img src="image/logo.png" width="200px" height="50px">
        <div class="row">           
            <div class="footer-col">
                <h4>Nuestra Empresa</h4>
                <ul class="texto-footer">
                    <li><a href="#">Sobre nosotros</a></li>
                    <li><a href="#">Nuestros servicios</a></li>
                    <li><a href="#">Politica de privacidad</a></li>
                    <li><a href="#">Programa de afiliacion</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Redes sociales</h4>
                <div class="redes-sociales">
                    <a href="https://es-la.facebook.com/" target="_blank"><i class="fab fa-facebook-f redes"></i></a>
                    <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.7145459324865!2d-77.06171164185717!3d-11.
                999511662404307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce568c042771%3A0x6072f46c2b26e80!2sSENATI!5
                e0!3m2!1ses-419!2spe!4v1631155762892!5m2!1ses-419!2spe" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
        <div class="container2-footer">
            <div class="copyright">
             ©  2021 Todos los derechos reservados              
            </div>
            <div class="terminos-footer">
                <a>POLITICA DE PRIVACIDAD</a> | <a>TERMINOS Y CONDICIONES</a>
            </div>
        </div>
    </div>
</footer>

@endsection
