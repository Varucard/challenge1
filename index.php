<?php
session_start();

// Verificar si hay un mensaje en la sesión
if (isset($_SESSION['mensaje'])) {
  $mensaje = $_SESSION['mensaje'];
  unset($_SESSION['mensaje']); // Eliminar el mensaje de la sesión
} else {
  $mensaje = '';
}
?>

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

  <?php if (!empty($mensaje)): ?>
    <script>
      alert("<?php echo $mensaje; ?>");
    </script>
  <?php endif; ?>

  <!-- Inicio Navbar -->
  <nav>
      <div class="w3-top">

        <div class="w3-bar w3-black w3-card">
          
          <!-- Logo del Cliente -->
          <a class="w3-bar-item" href=""><img src="img/logo_fondo.png" alt="Logo de LibCostruct"  width="150px" height="100px"></a>
      
          <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
          <a href="#" class="w3-hover-orange w3-bar-item w3-button w3-padding-large">CASA</a>
          <a href="#band" class="w3-hover-orange w3-bar-item w3-button w3-padding-large w3-hide-small">CONSTRUCTORA</a>
          <a href="#tour" class="w3-hover-orange w3-bar-item w3-button w3-padding-large w3-hide-small">MATERIALES</a>
          <a href="#contact" class="w3-hover-orange w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACTO</a>
          <div class="w3-dropdown-hover w3-hide-small">
              <button class="w3-hover-orange w3-padding-large w3-button" title="More">MAS<i style="padding-left: 5px;" class="fa fa-caret-down"></i></button>     
              <div class="w3-dropdown-content w3-bar-block w3-card-4">
              <a href="#" class="w3-hover-orange w3-bar-item w3-button">Mercaderia</a>
              <a href="#" class="w3-hover-orange w3-bar-item w3-button">Extras</a>
              </div>
          </div>

          <a href="javascript:void(0)" class="w3-padding-large w3-hover-orange w3-hide-small w3-right"><i class="fa fa-search"></i></a>
          </div>
      </div>

      <!-- Barra de navegación en pantallas pequeñas (elimine el atributo onclick si desea que la barra de navegación se muestre siempre sobre el contenido al hacer clic en los enlaces) -->
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

    <!-- Inicio contenido de la Pagina -->
    <div class="w3-content" style="max-width:2000px;margin-top:46px">

      <!-- Inicio Carrousel/ Imagenes del mismo -->
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
      <!-- Cierre Carrousel/ Imagenes del mismo -->
  
      <!-- Inicio seccion empresa -->
      <section>
        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
          <h2 class="w3-wide">LIBCONSTRUCT</h2>
          <p class="w3-opacity"><i>Cerca de tu hogar siempre</i></p>
          <p>
            Si está pensando en ampliar un espacio, crear uno nuevo o construir, nosotros te acompañamos en cada una de las etapas.
            Somos una empresa dinámica, conformada por un equipo altamente capacitado. Tenemos más de 20 años de experiencia en el rubro
            y somos el único proveedor que brinda un servicio integral, desde los materiales para la construcción hasta terminaciones
            y electrodomésticos.Siempre buscamos aportar una mirada objetiva para que puedas materializar tus ideas de forma más correcta.
          </p>
        
        <!-- Inicio sección sucursales -->
          <div class="w3-row w3-padding-32">
            <div class="w3-third">
              <p>Sucursal Merlo</p>
              <img src="img/sucursal_merlo.jpg" class="w3-round w3-margin-bottom"  style="width:150px; height: 150px;" alt="Sucursal Merlo">
            </div>
            <div class="w3-third">
              <p>Sucursal Ramos Mejia</p>
              <img src="img/sucursal_ramos_mejia.jpg" class="w3-round w3-margin-bottom"  style="width:150px; height: 150px;" alt="Sucursal Ramos Mejia">
            </div>
            <div class="w3-third">
              <p>Sucursal Haedo</p>
              <img src="img/sucursal_haedo.jpg" class="w3-round"  style="width:150px; height: 150px;" alt="Sucursal Haedo">
            </div>
          </div>
        </div>
      </section>
      <!-- Cierre sección sucursales -->
      <!-- cierre seccion empresa -->

      <!-- Inicio seccion ofertas y materiales -->
      <section>
        <div class="w3-black" id="tour">
          <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
            <h2 class="w3-wide w3-center">OFERTAS!</h2>
            <p class="w3-opacity w3-center"><i>Sólo mes de abril!</i></p><br>

            <ul class="w3-ul w3-border w3-white w3-text-grey">
              <li class="w3-padding">Baños<span class="w3-tag w3-red w3-margin-left">Merlo</span></li>
              <li class="w3-padding">Ladrillos<span class="w3-tag w3-red w3-margin-left">Haedo</span></li>
              <li class="w3-padding">Cerámicas<span class="w3-tag w3-red w3-margin-left">Ramos Mejia</span></li>
            </ul>

            <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
              <div class="w3-third w3-margin-bottom">
                <img src="img/baño_muestra.jpg" alt="Baño" style="width: 245px; height: 200px "  class="w3-hover-opacity">
                <div class="w3-container w3-white">
                  <p><b>Baño</b></p>
                  <p>Combo ferrum andina inodoro y deposito dual<br>$73900</br></p>
                </div>
              </div>
              <div class="w3-third w3-margin-bottom">
                <img src="img/ladrillos.jpg" alt="Ladrillos" style="width:245px; height: 200px" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                  <p><b>Ladrillos</b></p>
                  <p>Ladrillo Comun Merlino 25x5x12cm<br>$32.02 c/u</br></p>
                </div>
              </div>
              <div class="w3-third w3-margin-bottom">
                <img src="img/ceramica_tiakiki.jpg" alt="Ceramica" style="width: 245px; height: 200px" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                  <p><b>Ceramica</b></p>
                  <p>Cerámica Vintage Marrakech Azul 37.5x75 2° Alberdi<br>$2954 m cuadrado</br></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Cierre Seccion ofertas y materiales -->

      <!-- Inicio seccion Formulario de contacto -->
      <section>
        <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
          <h2 class="w3-wide w3-center">CONTACTO</h2>
          <p class="w3-opacity w3-center"><i>Necesitas construir?</i></p>
          <p class="w3-opacity w3-center"><i>Contactanos</i></p>
          <div class="w3-row w3-padding-32">
            <div class="w3-col m6 w3-large w3-margin-bottom">
              <i class="fa fa-map-marker" style="width:30px"></i> Dirección: Calle Zapiola 1420, Libertad Merlo.<br>
              <i style="padding-top: 15px; width:30px" class="fa fa-phone"></i> Telefono fijo:(0220)-4978867<br>
              <i class="fa-sharp fa-solid fa-mobile" style="width:30px"></i> Celular: (011) 76888890<br>
              <i class="fa fa-envelope" style="width:30px"> </i> Email: lib_construct@gmail.com<br>
            </div>
            <div class="w3-col m6">
              <form action="./php/back_libConstruct.php" method="POST">
                <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                  <div class="w3-half">
                    <input class="w3-input w3-border" type="text" placeholder="Nombre" required name="nombre">
                  </div>
                  <div class="w3-half">
                    <select style="margin-bottom: 25px;" class="w3-input w3-border w3-hover-orange w3-opacity" required name="consultor">
                    <option value="PERSONA">Persona</option>
                    <option value="EMPRESA">Empresa</option>
                    </select>
                  </div>
                  <div class="w3-half">
                    <input class="w3-input w3-border" type="tel" placeholder="Telefono" required name="telefono">
                  </div>
                  <div class="w3-half">
                    <input class="w3-input w3-border" type="email" placeholder="Email" required name="email">
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

      <!-- Cierre contenido de la pagina -->
    </div>

  </main>
  <!-- Cierre Main -->

  <!-- Inicio de Footer -->
  <footer>

    <!-- Api De Google Maps -->
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3280.563442324534!2d-58.688272!3d-34.690966!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc0f68e54f331%3A0x55e386da627f68b0!2sZapiola%201420%2C%20Libertad%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1682287516991!5m2!1ses!2sar"
      width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!-- Cierre Api de Google Maps -->

    <!-- Inicio sección inferior footer -->
    <div class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <p class="w3-medium">LibConstruct</p>
    </div>
    
  </footer>
  <!-- Cierre de Footer -->
    
  <!-- JavaScript -->
  <!-- Permite la utilización de Iconos dentro de la pagina -->
  <script src="js/icons.js" crossorigin="anonymous"></script>

  <!-- ARCHIVO JAVASCRIPT QUE ENLAZA LA LOGICA PARA EL CARROUSEL -->
  <script src="js/carrousel.js" crosorigin="anonymous"></script>

</body>

</html>