@extends('layout.head')
@section('page_name', '𝙂𝙖𝙨 𝙇𝙖𝙧𝙖𝙫𝙚𝙡')
@section('estilo_propio', 'css/contacto.css')
{{--@section('responsive', 'css/index_responsive.css');--}}

@section('content')

{{--###################### BARRA DE NAVEGACION ######################--}}
@include('layout.barra_navegacion')

<div class="container">
        <h1 class="titulo-contac">CONTACTANOS<h1>
        <div class="contact-wrapper">
            <div class="contact-form">
                <form action="">
                    <p>
                        <label>Nombres</label>
                        <input type="text" name="fullname">
                    </p>
                    <p>
                        <label>Apellidos</label>
                        <input type="email" name="email">
                    </p>
                    <p>
                        <label>Numero telefonico</label>
                        <input type="tel" name="phone">
                    </p>
                    <p>
                        <label>Correo Electronico</label>
                        <input type="text" name="affair">
                    </p>
                    <p class="block">
                       <label>Mensaje</label> 
                        <textarea name="message" rows="3"></textarea>
                    </p>
                    <br>
                    <p class="block">
                        <button>
                            Enviar
                        </button>
                    </p>
                </form>
            </div>
            <div class="contact-info">
                <h4>Más Info</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Calle Lima 156</li>
                    <br>
                    <li><i class="fas fa-phone"></i> (111) 111 111 111</li>
                    <br>
                    <li><i class="fas fa-envelope-open-text"></i> market@website.com</li>
                    <br>
                </ul>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p>Market.com</p>
            </div>
        </div>
</div>
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
                    <a href="https://es-la.facebook.com/"><i class="fab fa-facebook-f redes"></i></a>
                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
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