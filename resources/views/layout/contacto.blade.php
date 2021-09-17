@extends('layout.head')
@section('page_name', '𝘾𝙤𝙣𝙩𝙖𝙘𝙩𝙖𝙣𝙤𝙨')
@section('estilo_propio', 'css/contacto.css')
{{--@section('responsive', 'css/index_responsive.css');--}}

@section('content')

{{--###################### BARRA DE NAVEGACION ######################--}}
@include('layout.barra_navegacion')

<div class="container">
    <h1 class="titulo-contac seccioncompensadora">CONTáCTANOS<h1>
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
                <li><span class="material-icons-outlined">phone_enabled</span>(111) 111 111 111</li>
                <br>
                <li><i class="fas fa-envelope-open-text"></i> market@website.com</li>
                <br>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p>Market.com</p>
        </div>
    </div>
</div>
@include('layout.footer')
@endsection