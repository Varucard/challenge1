<?php

require_once './send_email.php';
require_once './phpMail/functiones.php';

/*--------- Variables ------------*/

$asuntoMail = 'Consulta por asesoramiento profesional';
$adjunto = '';

// Extrare las variables del .env
$email = getenv('USER_EMAIL');
$password_email = getenv('PASSWORD_EMAIL');

// Variables por POST
$contacto = [
  'nombre' => strtoupper(checkInputText('nombre', '/^[a-z\' ]+$/ui')),
  'consultor' => strtoupper(checkInputText('consultor', '/^[a-z\' ]+$/ui')),
  'telefono' => intval(checkInputText('telefono', '/^([0-9])*$/')),
  'email' => checkInputEmail('email'),
  'mensaje' => strtoupper(checkInputText('mensaje')),
];

$mensaje = '
<html>
    <head>

        <meta charset="UTF-8">
        <title></title>

    </head>
    <body>

      <div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
        <h1>Hemos Recibido una solicitud para comunicarnos con usted: ' . $contacto['nombre'] . '</h1>

        <div align="left" >
          <p>LibConstruct lo saluda y le agradece que se interese por nuestros servicios</p>
          <p>A la brevedad uno de nuestro asesores se estara comunicando con usted a: <strong>' . $contacto['email'] . '</strong> para responder su duda.</p>
          <br>
          <p><strong>Muchas Gracias por la confianza!</strong>.</p>
        </div>

        </div>

    </body>

</html>
';

if (enviarMail($contacto, $email, $password_email, $mensaje, $asuntoMail, $adjunto)) {
  $mensaje = "¡Datos guardados correctamente!";

  // variable que indica si se debe mostrar el mensaje emergente
  $mostrarMensaje = true;

  // imprimir el mensaje y un elemento vacío para mostrarlo
  echo '<span id="mensaje"></span>';
}
?>

<script>
// verificar si se debe mostrar el mensaje emergente
var mostrarMensaje = "<?php echo $mostrarMensaje; ?>";

window.location.href = "http://localhost/challenge1/"

// si se debe mostrar el mensaje emergente, mostrarlo
if (mostrarMensaje) {
  alert("<?php echo $mensaje; ?>");
}

</script>