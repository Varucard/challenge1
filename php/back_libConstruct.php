<?php

  session_start();

  require_once './send_email.php';
  require_once './functions.php';

  /*--------- Variables ------------*/
  $asuntoMail = 'Consulta por asesoramiento profesional';
  $adjunto = '';
  $consultor = ['PERSONA', 'EMPRESA'];
  // variable que indica si se debe mostrar el mensaje emergente
  $mostrarMensaje = true;
  $_SESSION['mensaje'] = '';

  // Extraer las variables de entorno
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

  // Invoco a las vistas una vez obtenido los valores
  require_once './views/barrel.php';

  if (enviarMail($contacto, $email, $password_email, $mensajeConsulta, $asuntoMail, $adjunto)) {

    $_SESSION['mensaje'] = '¡Mensaje enviado correctamente! A la brevedad nos comunicaremos con usted';
    header('Location: ../index.php');
    exit;

  } else {

    $_SESSION['mensaje'] = '¡Ocurrio un error, por favor vuelva a intentarlo!';
    header('Location: ../index.php#contact');
    exit;

  }

?>