<?php

require_once './phpMail/enviarMail.php';
require_once './phpMail/functiones.php';

/*--------- Variables ------------*/

// Extrare las variables del .env
$contacto = [
  'nombre' => strtoupper(checkInputText('nombre', '/^[a-z\' ]+$/ui')),
  'consultor' => strtoupper(checkInputText('consultor', '/^[a-z\' ]+$/ui')),
  'numero' => intval(checkInputText('numero', '/^([0-9])*$/')),
  'email' => checkInputEmail('email'),
  'mensaje' => checkInputDate('mensaje'),
];

$contenido = '
<html>
    <head>

        <meta charset="UTF-8">
        <title></title>

    </head>
    <body>

        <div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
            <h1>Hemos Recibido una solicitud de registración para nuestro evento masivo.</h1>

            <div align="left" >
                <p>Le damos la biendivenida : <strong>' . $user['email'] . '</strong>.</p>
                <p><strong>El siguiente codigo le sera requerido para acceder mas actividades durante la jornada: </strong></p>
                <br>
                <p><strong>' . $user['code_verif'] . '</strong></p>
                <br>
                <p><strong>Muchas Gracias por su asistencia ..</strong>.</p>
            </div>

          </div>

    </body>

</html>
';

//TODO obtener las credenciales del .env
/**
 * Consigue las credenciales para poder enviar un Mail.
 * Pasa por Parametros los datos necesearios para enviar el mismo.
 */
if (file_exists($configuracion)) {

  $archivo = fopen($configuracion,'r') or die("no puedo abrir archivo de datos");

  while(!feof($archivo)) {

      $linea = fgets($archivo);
      $line = str_replace("\n", "", $line);
      $datos = explode("|", $linea);
      $desde = $datos[0];
      $credencial = $datos[1];

  } 
  
  $envio = enviarMail($user['email'], $contenido, $asuntoMail, $adjunto = '', $desde, $credencial);
  
  if ($envio !== TRUE) {
    echo $envio;
  }

} else {

  echo "Error al intentar enviar correo";

}

//TODO Verficar codigo del final

?>