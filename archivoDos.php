<?php

$asunto=$_POST["asunto"];
$mensaje=$_POST["mensaje"];

$asuntoEnvio= fopen("texto.txt","a")or die("Error al enviar");

fwrite($asuntoEnvio, "Asunto: ");
fwrite($asuntoEnvio, "\r\n");
fwrite($asuntoEnvio, $asunto);
fwrite($asuntoEnvio, "\r\n");
fwrite($asuntoEnvio, "Mensaje: ");
fwrite($asuntoEnvio, "\r\n");
fwrite($asuntoEnvio, $mensaje);
fwrite($asuntoEnvio,"\r\n");
fwrite($asuntoEnvio,"<strong>--------------------------------</strong>");

echo "enviados correctamente, ver en web <a href="archivoTres.php">IR A WEB</a>";
fclose($asuntoEnvio);



?>