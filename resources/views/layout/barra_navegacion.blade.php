<header id="header">
        <div class="barra" id="barra" style="visibility: visible;">
            <nav class="barra_main">
                <input type="checkbox" id="ckbox">
                <label for="ckbox" class="drawer">
                    <span class="material-icons-outlined">menu</span>
                </label>
                <img src="image/logo.png" alt="logo barra" width="100px" onClick="window.location.href='http://localhost:8000/'" style="cursor: pointer;">


                <ul class="menu-box">
                    <li class="active li-nav1 menu-item" data-url="nosotros">
                        <button role="link" onclick="window.location='#'" class="navbutton scrollto" data-link="seccion1">
                            <span class="material-icons-outlined iconnav">
                                groups
                            </span>
                            Nosotros
                        </button>
                    </li>

                    <li class="active li-nav1 menu-item" data-url="servicios">
                        <button role="link" onclick="window.location='#'" class="navbutton scrollto" data-link="seccion2">
                            <span class="material-icons-outlined iconnav">
                                miscellaneous_services
                            </span>
                            Productos
                        </button>
                    </li>

                    <li class="active li-nav1 menu-item" data-url="servicios">
                        <button role="link" onclick="window.location='#'" class="navbutton scrollto" data-link="seccion3">
                            <span class="material-icons-outlined iconnav">
                                miscellaneous_services
                            </span>
                            Servicios
                        </button>
                    </li>

                    <li class="active li-nav1 menu-item" data-url="contacto">
                        <button role="link" onclick="window.location='contacto'" class="navbutton scrollto">
                            <span class="material-icons-outlined iconnav">
                                call
                            </span>
                            Contacto
                        </button>
                    </li>

                    <li class="active li-nav1 menu-item">
                        <a href="#miModal" class="active navbuttonE">
                            <span class="material-icons-outlined iconnavE">
                                search
                            </span>
                        </a>
                        <div id="miModal" class="modal">

                            <div class="modal-contenido">
                                <div>
                                    <a href="#">X</a>
                                    <form action="/productos?" method="get">
                                        <input type="text" name="filtro">
                                        <button type="submit">
                                            <span class="material-icons-outlined iconnavE">search</span>
                                        </button>
                                    </form>
                                </div>    
                            </div>

                        </div>
                    </li>


                {{--###################### CARRITO ######################--}}
                    <figcaption>
                        <li class="icono li-nav1" id="icono">
                            <button role="link" class="active navbuttonE">
                                <span class="material-icons-outlined iconnavE">
                                    shopping_cart
                                </span>
                            </button>
                        </li>
                        <div class="tooltip" id="tooltip">
                            <div class="info">

                                @include('cart')
                                
                                <div class="contenedor-btn">
                                    <button>Comprar</button>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </ul>
            </nav>

            {{--###################### SUB BARRA NAVEGACION ######################--}}
            @if(isset($productos))
                @include('layout.sub_barra_navegacion')
            @endif
        </div>
    </header>
<script src="js/barra_carro.js"></script>
<script src="js/botones_barra_navegacion.js"></script>
<script src="js/barra_observer.js"></script>
