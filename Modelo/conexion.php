<?php

$servidor = "localhost";
$user = "root";
$password = "";
$database = "sistemataller";

$conexion = mysqli_connect($servidor,$user,$password,$database);
$conexion->set_charset("utf8");

?>