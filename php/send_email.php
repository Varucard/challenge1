<?php

require_once './phpMail/enviarMail.php';
require_once './phpMail/functiones.php';
require_once './phpMail/config.php';

/*--------- Variables ------------*/

$configuracion = 'config.dat';
$user = [
  'name' => strtoupper(checkInputText('name', '/^[a-z\' ]+$/ui')),
  'surname' => strtoupper(checkInputText('surname', '/^[a-z\' ]+$/ui')),
  'email' => checkInputEmail('email'),
  'dni' => intval(checkInputText('dni', '/^([0-9])*$/')),
  'birthdate' => checkInputDate('birthdate'),
  'clave' => md5(checkInputText('clave')),
  'state' => 0,
  'code_verif' => cripto_6(8),
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

/**
*Verificar que el ingresante sea mayor de Edad.
*/
if (!checkAge($user['birthdate'], 18))
  die ("Usted no es mayor de edad");

/**
 * Verifico si el archivo existe y en caso de que no lo creo.
 * Grabar en Mapa de Datos el estado y el codigo de verificacion.
 * Verificar que la cuenta de correo no se encuentre repetida.
 * En caso de ser un nuevo usuario le asigno "inactivo (0)" al crearlo.
 */
if (!file_exists(NAME_FILE)) {
  createFile(NAME_FILE);
  writeLineInFile(getHeader($user));
}

$fileContent = file_get_contents(NAME_FILE);

if (strpos($fileContent, $user['email']) !== FALSE) {

  ?>
        <br> <a href="recupero.html"> <button>Recuperar contraseña</button> </a> <br>
  <?php

  die ("Usted ya se encuentra registrado");
}

/**
 * Comprobar la integridad de la base de datos previo a grabar.
 * "name|surname|email|dni|birthdate|clave|state|code_verif".
 */
if (!compareHeaders(getHeader($user), getHeaderFromDB($fileContent)))
  die ("Base de Datos dañada");
  
saveInDB($user);
echo "Usuario grabado exitosamente";
echo "<br>";

?>
  <br> <a href="verificar.html"> <button>Verificar Usuario</button> </a> <br>
<?php

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

?>