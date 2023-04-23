<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="favicon.ico">

    <!-- Styles .CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/tipografia.css">

    <title>LibConstruct</title>
</head>

<body>

    <!-- Inicio Navbar -->
    <nav>
        <div class="w3-top">
            <div class="w3-bar w3-black w3-card">
                <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"
                    href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i
                        class="fa fa-bars"></i></a>
                <a href="#" class="w3-hover-orange w3-bar-item w3-button w3-padding-large">CASA</a>
                <a href="#band"
                    class="w3-hover-orange w3-bar-item w3-button w3-padding-large w3-hide-small">CONSTRUCTORA</a>
                <a href="#tour"
                    class="w3-hover-orange w3-bar-item w3-button w3-padding-large w3-hide-small">MATERIALES</a>
                <a href="#contact"
                    class="w3-hover-orange w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACTO</a>
                <div class="w3-dropdown-hover w3-hide-small">
                    <button class="w3-hover-orange w3-padding-large w3-button" title="More">MAS<i
                            style="padding-left: 5px;" class="fa fa-caret-down"></i></button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                        <a href="#" class="w3-hover-orange w3-bar-item w3-button">Mercaderia</a>
                        <a href="#" class="w3-hover-orange w3-bar-item w3-button">Extras</a>
                    </div>
                </div>

                <!--Logo del Cliente-->
                <a href=""><img src="img/logo_fondo.png" alt="Logo de LibCostruct" style="margin-left:150px"
                        width="250px" height="200px"></a>

                <a href="javascript:void(0)" class="w3-padding-large w3-hover-orange w3-hide-small w3-right"><i
                        class="fa fa-search"></i></a>
            </div>
        </div>

        <!--Barra de navegación en pantallas pequeñas (elimine el atributo onclick si desea que la barra de navegación se muestre siempre sobre el contenido al hacer clic en los enlaces)-->
        <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top"
            style="margin-top:46px">
            <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
            <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
        </div>
    </nav>
    <!-- Cierre Navbar -->

    <!-- Comienzo Main -->
    <main>

        <!-- Contenido de la Pagina -->
        <div class="w3-content" style="max-width:2000px;margin-top:46px">

            <!-- Inicio Carrousel/ Imagenes del mismo-->
            <section>
                <div class="mySlides w3-display-container w3-center">
                    <img src="img/herramientas_construccion.jpg" style="width:100%">
                </div>
                <div class="mySlides w-display-container w-center">
                    <img src="img/pala_ladrillos.jpg" style="width:100%">
                </div>
                <div class="mySlides w3-display-container w3-center">
                    <img src="img/ladrillos.jpg" style="width:100%">
                </div>
            </section>
            <!-- Cierre Carrousel/ Imagenes del mismo-->

            <!-- Sección La Empresa -->
            <section>

                <h1>Hola Empresa</h1>

            </section>
            <!-- Cierr Sección La Empresa -->

            <!-- Sección materiales -->
            <section>

                <h1>Hola Materiales</h1>

            </section>
            <!-- Cierr Sección materiales -->

            <!-- Seccion Formulario de contacto -->
            <section>
                <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
                    <h2 class="w3-wide w3-center">CONTACTO</h2>
                    <p class="w3-opacity w3-center"><i>Necesitas construir?</i></p>
                    <p class="w3-opacity w3-center"><i>Contactanos</i></p>
                    <div class="w3-row w3-padding-32">
                        <div class="w3-col m6 w3-large w3-margin-bottom">
                            <i class="fa fa-map-marker" style="width:30px"></i> Dirección: Calle Zapiola 1420, Libertad
                            Merlo.<br>
                            <i style="padding-top: 15px;" class="fa fa-phone" style="width:30px"></i> Telefono
                            fijo:(0220)-4978867<br>
                            <i class="fa-sharp fa-solid fa-mobile" style="width:30px"></i> Celular: (011) 76888890<br>
                            <i class="fa fa-envelope" style="width:30px"> </i> Email: lib_construct@gmail.com<br>
                        </div>
                        <div class="w3-col m6">
                            <form action="/send_email.php" target="_blank">
                                <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                                    <div class="w3-half">
                                        <input class="w3-input w3-border" type="text" placeholder="Nombre" required
                                            name="nombre">
                                    </div>
                                    <div class="w3-half">
                                        <select style="margin-bottom: 25px;"
                                            class="w3-input w3-border w3-hover-orange w3-opacity" required
                                            name="consultor">
                                            <option value="persona">Persona</option>
                                            <option value="empresa">Empresa</option>
                                        </select>
                                    </div>
                                    <div class="w3-half">
                                        <input class="w3-input w3-border" type="tel" placeholder="Telefono" required
                                            name="telefono">
                                    </div>
                                    <div class="w3-half">
                                        <input class="w3-input w3-border" type="email" placeholder="Email" required
                                            name="email">
                                    </div>
                                </div>
                                <input class="w3-input w3-border" type="text" placeholder="Mensaje" required
                                    name="mensaje">
                                <button class="w3-button w3-black w3-section w3-right" type="submit">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Cierre Seccion Formulario de contacto -->

            <!--Cierre contenido de la pagina-->
        </div>

    </main>
    <!-- Cierre Main -->

    <!-- Api De Google De Direccion -->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3280.563442324534!2d-58.688272!3d-34.690966!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc0f68e54f331%3A0x55e386da627f68b0!2sZapiola%201420%2C%20Libertad%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1682287516991!5m2!1ses!2sar"
        width="1920" height="400" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

    <!-- Inicio de Footer -->
    

    <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <p class="w3-medium">LibConstruct</p>
    </footer>


    <!-- Cierre de Footer -->

    <!--JavaScript-->
    <!-- Permite la utilización de Iconos dentro de la pagina -->
    <script src="js/icons.js" crossorigin="anonymous"></script>

    <!-- ARCHIVO JAVASCRIPT QUE ENLAZA LA LOGICA PARA EL CARROUSEL -->
    <script src="js/carrousel.js" crosorigin="anonymous"></script>

</body>

</html>