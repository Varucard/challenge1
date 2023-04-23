<!DOCTYPE html>
<html lang="en">
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
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="#" class="w3-hover-orange w3-bar-item w3-button w3-padding-large">CASA</a>
            <a href="#band" class="w3-hover-orange w3-bar-item w3-button w3-padding-large w3-hide-small">CONSTRUCTORA</a>
            <a href="#tour" class="w3-hover-orange w3-bar-item w3-button w3-padding-large w3-hide-small">MATERIALES</a>
            <a href="#contact" class="w3-hover-orange w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACTO</a>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-hover-orange w3-padding-large w3-button" title="More">MAS<i class="fa fa-caret-down"></i></button>     
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="#" class="w3-hover-orange w3-bar-item w3-button">Mercaderia</a>
                <a href="#" class="w3-hover-orange w3-bar-item w3-button">Extras</a>
                </div>
            </div>

            <!--Logo del Cliente-->
            <a href=""><img src="img/logo_fondo.png" alt="Logo de LibCostruct" style="margin-left:40px" width="250px" height="200px"></a>

            <a href="javascript:void(0)" class="w3-padding-large w3-hover-orange w3-hide-small w3-right"><i class="fa fa-search"></i></a>
            </div>
        </div>

        <!--Barra de navegación en pantallas pequeñas (elimine el atributo onclick si desea que la barra de navegación se muestre siempre sobre el contenido al hacer clic en los enlaces)-->
        <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
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
    
           <!-- Seccion empresa-->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">LIBCONSTRUCT</h2>
    <p class="w3-opacity"><i>Cerca de tu hogar siempre</i></p>
    <p class="w3-justify"><p>Si está pensando en ampliar un espacio, crear uno nuevo o construir, nosotros te acompañamos en cada una de las etapas.
Somos una empresa dinámica, conformada por un equipo altamente capacitado. Tenemos más de 20 años de experiencia en el rubro y somos el único proveedor que brinda un servicio integral, desde los materiales para la construcción hasta terminaciones y electrodomésticos.

Siempre buscamos aportar una mirada objetiva para que puedas materializar tus ideas de forma más correcta.
 <!--cierre seccion empresa-->
 <!--Sucursales-->
</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Sucursal Merlo</p>
        <img src="/img/SucursalMerlo.jpg" class="w3-round w3-margin-bottom"  style="width:150px; height: 150px;">
      </div>
      <div class="w3-third">
        <p>Sucursal Ramos Mejia</p>
        <img src="/img/Sucursal Ramos Mejia.jpg" class="w3-round w3-margin-bottom"  style="width:150px; height: 150px;">
      </div>
      <div class="w3-third">
        <p>Sucursal Haedo</p>
        <img src="/img/Sucursal Haedo.jpg" class="w3-round"  style="width:150px; height: 150px;">
      </div>
    </div>
  </div>
  <!--cierre sucursales-->

  <!-- Seccion ofertas materiales -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">  OFERTAS!</h2>
      <p class="w3-opacity w3-center"><i>Sólo mes de abril!</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">Baño <span class="w3-tag w3-red w3-margin-left">Merlo</span></li>
        <li class="w3-padding">Ladrillos <span class="w3-tag w3-red w3-margin-left">Haedo</span></li>
        <li class="w3-padding">Cerámica <span class="w3-tag w3-red w3-margin-left">Ramos Mejia</span></li>
      </ul>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="/img/baño_muestra.jpg" alt="Baño" style="width: 245px; height: 200px "  class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Baño</b></p>
            <p>Combo ferrum andina inodoro y deposito dual<br>$73900</br></p>
           <!--<button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Comprar</button> -->
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="/img/ladrillos.jpg" alt="Ladrillos" style="width:245px; height: 200px" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Ladrillos</b></p>
            <p>Ladrillo Comun Merlino 25x5x12cm<br>$32.02 c/u</br></p>
           <!-- <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Comprar</button> -->
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="/img/ceramica_tiakiki.jpg" alt="Ceramica" style="width: 245px; height: 200px" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Ceramica</b></p>
            <p>Cerámica Vintage Marrakech Azul 37.5x75 2° Alberdi<br>$2954 m cuadrado</br></p>
            <!--<button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Comprar</button>-->
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <!-- Precios
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Precio</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> $73000</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>-->
      </div>
    </div>
  </div>
    <!--cierre materiales-->

            <!-- Seccion Formulario de contacto -->
            <section>
                <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
                    <h2 class="w3-wide w3-center">CONTACTO</h2>
                    <p class="w3-opacity w3-center"><i>Necesitas construir?</i></p>
                    <div class="w3-row w3-padding-32">
                    <div class="w3-col m6 w3-large w3-margin-bottom">
                        <i class="fa fa-map-marker" style="width:30px"></i> Dirección: calle 123<br>
                        <i class="fa fa-phone" style="width:30px"></i> Telefono: 000000000000<br>
                        <i class="fa fa-envelope" style="width:30px"> </i> Email: algo@algo.com<br>
                    </div>
                    <div class="w3-col m6">
                        <form action="/send_email.php" target="_blank">
                        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                            <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Nombre" required name="nombre">
                            </div>
                            <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Email" required name="email">
                            </div>
                        </div>
                        <input class="w3-input w3-border" type="text" placeholder="Mensaje" required name="mensaje">
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

    <!-- Inicio de Footer -->
    <footer>

    <h1>Hola Footer!</h1>

    </footer>
    <!-- Cierre de Footer -->

    <!--JavaScript-->
    <!-- Permite la utilización de Iconos dentro de la pagina -->
    <script src="js/icons.js" crossorigin="anonymous"></script>

    <!-- ARCHIVO JAVASCRIPT QUE ENLAZA LA LOGICA PARA EL CARROUSEL -->
    <script src="js/carrousel.js" crosorigin="anonymous"></script>

</body>
</html>
