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
                <span>Queremos despertar pasión por el gas GLP.</span>
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
<div class="sobre_nosotros" id="seccion1">
    <div class="sobre_n_text">
        <h1>Sobre nosotros.</h1>
        <p>Somos una empresa dedicada al transporte, a la distribución y comercialización de combustible y otros productos derivados del petróleo y a ofrecer nuestros servicios con la finalidad de poder satisfacer las necesidades de cada uno de nuestros clientes. Contamos con una gran red de distribuidores de combustible en todo Lima y a nivel nacional.</p>
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
<section class="section section_productos" id="seccion2">
    <h1 class="section_title"><span>PRODUCTOS</span></h1>
    <h2>El trabajo conjunto con nuestros proveedores nos permite ofrecer una amplia variedad de productos de distintas marcas con la mejor calidad siempre.</h2>
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
        <div class="container_unidad">
            <a href="/productos?filtro=LLANTAS+Y+AROS">
                <div class="box-all">
                    <div class="imgBx">
                        <img src="image/llantas-aros.jpg" alt="imagen categoria producto">
                    </div>
                    <div class="box-contenido">
                        <h3>LLANTAS Y AROS</h3>
                        <p>Tenemos todas las llantas de autos en sus diferentes tamaños y en distintas marcas.</p>
                    </div>
                </div>
            </a>
        </div>
    
        <div class="container_unidad">
            <a href="/productos?filtro=BATERIAS">
                <div class="box-all">
                    <div class="imgBx">
                        <img src="image/bateria.jpg" alt="imagen categoria producto">
                    </div>
                    <div class="box-contenido">
                        <h3>BATERIAS</h3>
                        <p>Contamos con las mejores baterías de todas las marcas para los distintos tipos de autos.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="container_unidad">
            <a href="/productos?filtro=AUDIO+Y+VIDEO">
                <div class="box-all">
                    <div class="imgBx">
                        <img src="image/radios.png" alt="imagen categoria producto">
                    </div>
                    <div class="box-contenido">
                        <h3>AUDIO Y VIDEO</h3>
                        <p>Encuentra la mayor variedad de dispositivos multimedias aquí de acuerdo a tus gustos.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="container_unidad">
            <a href="/productos?filtro=LIMPIEZA">
                <div class="box-all">
                    <div class="imgBx">
                        <img src="image/limpieza.jpg" alt="imagen categoria producto">
                        
                    </div>
                    <div class="box-contenido">
                        <h3>LIMPIEZA</h3>
                        <p>Manten tu auto limpio y nuevo siempre con los mejores productos de limpieza.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="container_unidad">
            <a href="/productos?filtro=Herramientas">
                <div class="box-all">
                    <div class="imgBx">
                        <img src="image/herramientas.jpg" alt="imagen categoria producto">
                    </div>
                    <div class="box-contenido">
                        <h3>HERRAMIENTAS</h3>
                        <p>Descubre las herramientas para tu autoque tanto estabas buscando en un solo lugar.</p>
                    </div>
                </div>
            </a>
        </div>
      </div>
    </div>
</section>

{{--###################### SERVICIOS ######################--}}
<section class="section section_servicios" id="seccion3">
    <h1 class="section_title"><span>SERVICIOS</span></h1>
    <h2>Nuestro compromiso con todos nuestros clientes nos impulsa a brindar siempre un trabajo permanente, eficiente y seguro; brindando lo mejor de nuestros servicios en todo momento.</h2>
    <div class="categorias_container" style="margin-top: 3em;">

        @foreach($servicios as $servicio)
            <div class="container_unidad">
                <a href="#">
                    <div class="box-all">
                        <div class="imgBx">
                            <img src="data:image/jpg;base64,<?php echo(base64_encode($servicio->imagen))?>" alt="" width="200px"> 
                        </div>
                        <div class="box-contenido servicios">
                            <h3>{{ $servicio->nombre }}</h3>
                            <p>{{ $servicio->descripcion }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
	</div>


    {{--################### COTIZAR #####################--}}    
<section class="section">   
    <div class="container" id="blur">
        <div class="content">
            <a href="#" onclick="toggle()">Calcular cotizacion</a>
        </div>
        <div class="float">
            <a class="wsp-link"  href="https://api.whatsapp.com/send?phone=+51%20977334989&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n." >
            <span class=" icono-wsp material-icons-outlined">
               whatsapp
            </span>
            <a class="wsp-text" href="https://api.whatsapp.com/send?phone=+51%20977334989&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n.">ESCRIBENOS</a>
            </a>
        </div>
    </div>
    <div id="popup">
        <a href="#" onclick="toggle()" class="salir">X</a> 
        <h2 id="cotizar">Cotizar</h2>
        <div class="contact-form">
            <form action="https://formsubmit.co/diegopena0309@gmail.com" method="POST">
                <p>
                    <label>Nombres</label>
                    <input type="text" name="fullname" required>
                </p>
                <p>
                    <label>Apellidos</label>
                    <input type="text" name="lastname" required>
                </p>
                <p>
                    <label>Numero telefonico</label>
                    <input type="tel" name="phone" required>
                </p>
                <p>
                    <label>Correo Electronico</label>
                    <input type="email" name="email" required>
                </p>
                <p class="block">
                    <label>Mensaje</label> 
                    <textarea name="message" rows="3" required></textarea>
                </p>
                <br>
                <p class="block">
                    <a target="_blank"><button type="submit">
                        Enviar
                    </button></a>
                </p>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        function toggle(){
            var blur = document.getElementById('blur');
            blur.classList.toggle('active')
            var popup = document.getElementById('popup');
            popup.classList.toggle('active')
        }
    </script>
</section>
{{--###################### COMENTARIOS ######################--}}
<section class="section section_comentarios">
    <h1 class="section_title"><span>Nuestros clientes</span></h1>
    <h2>Tu opinión es muy importante para nosotros. Déjanos tu comentario para seguir mejorando y brindarte mejor nuestros servicios.</h2>
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

@include('layout.footer')
@endsection
