<?php
session_start();

echo "<h1>Bienvenido</h1>".$_SESSION['usuario'];

echo "<br>";
echo "<a href='cerrar.php'>Cerrar sesion</a>";

?>