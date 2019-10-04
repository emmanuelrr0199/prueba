<?php

$host="localhost";
$user="root";
$pass="";
$based="introduccion";

$conectar= mysqli_connect($host, $user, $pass, $based);
mysqli_set_charset($conectar, "utf8");
?>