<?php

include("conexion.php");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];

$insertar = "INSERT INTO datos(Nombre, Apellido, Telefono) VALUES('$nombre','$apellido', '$telefono')";

$entrar = mysqli_query($conectar, $insertar);




?>