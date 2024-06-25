<?php
if(!empty($_POST["btnCerrarSesion"])){

session_start();
    session_destroy();
    header('Location: index.php');
    exit();
} 
?>