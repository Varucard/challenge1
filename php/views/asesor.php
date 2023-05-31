<?php

$mensajeAsesor = '
  <html>
      <head>

          <meta charset="UTF-8">
          <title></title>

      </head>
      <body>

        <div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
          <h1>Hemos Recibido una solicitud de asesoramiento: </h1>

          <div align="left">
            <h3>Datos del solicitante</h3>

            <ul>
              <li>' . $contacto['nombre'] . '</li>
              <li>' . $contacto['email'] . '</li>
              <li>' . $contacto['telefono'] . '</li>
              <li>Naturaleza del solicitante: ' . $contacto['consultor'] . '</li>
            </ul>

            <h3>Consulta del solicitante</h3>
            <p>' . $contacto['mensaje'] . '</p>
          </div>

          </div>

      </body>

  </html>
  ';

?>