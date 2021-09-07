<header>
        <div class="barra" id="barra">
            <nav class="nav1">
                <input type="checkbox" id="ckbox">
                <label for="ckbox" class="drawer">
                    <span class="material-icons-outlined">menu</span>
                </label>
                <img src="image/logo.png" alt="" width="100px">

                <ul class="menu-box">
                    <li class="active li-nav1 menu-item" data-url="nosotros">
                        <button role="link" onclick="window.location='#'" class="navbutton">
                            <span class="material-icons-outlined iconnav">
                                groups
                            </span>
                            Nosotros
                        </button>
                    </li>

                    <li class="active li-nav1 menu-item" data-url="servicios">
                        <button role="link" onclick="window.location='#'" class="navbutton">
                            <span class="material-icons-outlined iconnav">
                                miscellaneous_services
                            </span>
                            Servicios
                        </button>
                    </li>

                    <li class="active li-nav1 menu-item" data-url="contacto">
                        <button role="link" onclick="window.location='#'" class="navbutton">
                            <span class="material-icons-outlined iconnav">
                                call
                            </span>
                            Contacto
                        </button>
                    </li>

                    <li class="active li-nav1 menu-item">
                        <button role="link" onclick="window.location='#'" class="active navbuttonE">
                            <span class="material-icons-outlined iconnavE">
                                search
                            </span>
                        </button>
                    </li>


{{--###################################### data tooltip  carrito ######################################--}}
                    <figcaption>
                        <li class="icono li-nav1" id="icono"><button role="link" onclick="window.location='#'" class="active navbuttonE"><span class="material-icons-outlined iconnavE">shopping_cart</span></button></li>
                        <div class="tooltip" id="tooltip">
                            <div class="info">
                                <h3 class="titulo">Producto</h3>
                                <p class="producto">
                                    Nombre:    ....... <br>
                                    Precio:    ....... <br>
                                    Cantidad:  ....... <br>
                                    Total:     .......
                                </p>
                                <div class="contenedor-btn">
                                    <button>Comprar</button>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </ul>
            </nav>
        </div>
    </header>
