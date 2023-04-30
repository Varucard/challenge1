<?php

  session_start();

  require_once './send_email.php';
  require_once './functiones.php';

  /*--------- Variables ------------*/

  $asuntoMail = 'Consulta por asesoramiento profesional';
  $adjunto = '';
  $consultor = ['PERSONA', 'EMPRESA'];
  // variable que indica si se debe mostrar el mensaje emergente
  $mostrarMensaje = true;
  $_SESSION['mensaje'] = '';

  // Extrare las variables del .env
  $email = getenv('USER_EMAIL');
  $password_email = getenv('PASSWORD_EMAIL');

  // Variables por POST
  $contacto = [
    'nombre' => strtoupper(checkInputText('nombre', '/^[a-z\' ]+$/ui')),
    'consultor' => strtoupper(checkInputSelect('consultor', $consultor)),
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

    $_SESSION['mensaje'] = '¡Mensaje enviado correctamente! A la brevedad nos comunicaremos con usted';
    header('Location: ../index.php');
    exit;

  } else {

    $_SESSION['mensaje'] = '¡Ocurrio un error, por favor vuelva a intentarlo!';
    header('Location: ../index.php#contact');
    exit;

  }

?>


<script>

/*
  // Redirigir de nuevo a la pagina
  window.location.href = "http://localhost/challenge1/"

  // verificar si se debe mostrar el mensaje emergente
  let mostrarMensaje = "<?php // echo $mostrarMensaje; ?>";

  // si se debe mostrar el mensaje emergente, mostrarlo
  if (mostrarMensaje) {
    alert("<?php //echo $mensaje; ?>");
  }
*/

</script>