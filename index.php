<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                <!-- Repasar JS de este <a> -->
                <!-- Todas las fa fa-algo son de los iconos -->
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">CASA</a>
            <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONSTRUCTORA</a>
            <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">MATERIALES</a>
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACTO</a>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-padding-large w3-button" title="More">MAS<i class="fa fa-caret-down"></i></button>     
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="#" class="w3-bar-item w3-button">Mercaderia</a>
                <a href="#" class="w3-bar-item w3-button">Extras</a>
                </div>
            </div>
            <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
            </div>
        </div>
    </nav>
    <!-- Cierre Navbar -->

    <!-- Comienzo Main -->
    <main> 

        <h1>Hola Mundo</h1>

    </main>
    <!-- Cierre Main -->
    
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

    </main>
    <!-- Cierre Main -->

    <!-- Inicio de Footer -->
    <footer>

    <h1>Hola Footer!</h1>

    </footer>
    <!-- Cierre de Footer -->

    <!-- Permite la utilización de Iconos dentro de la pagina -->
    <script src="js/icons.js" crossorigin="anonymous"></script>

</body>
</html>
