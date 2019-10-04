<?php
$user= "emma";
$pass= "123";

if($_POST['usuario']==$user && $_POST['contrasena']==$pass ){
    session_start();
    $_SESSION['usuario']="Emmanuel Rodriguez";
    header('location: inicio.php');
    
}else{
    echo "Datos erroneos";
    echo "<a href='registro.php'>Intentar nuevamente </a>";
}




?>