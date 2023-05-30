<?php

require_once './back_libConstruct.php';

$mensajeConsulta = '
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

  ?><