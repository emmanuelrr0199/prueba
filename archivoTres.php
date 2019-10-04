<?php
$solicitud= fopen("texto.txt","r")or die("error");

while(!feof($solicitud)){
    $leer=fgets($solicitud);
    $ver=nl2br($leer);
    echo $ver;
    
}


?>