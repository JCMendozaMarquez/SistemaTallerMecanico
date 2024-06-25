<?php

    if (!empty($_POST["btnmodificar"])) {
        if (!empty($_POST["usuario"]) and !empty($_POST["pass"]) and !empty($_POST["rol"])) {
            $id=$_POST['id'];
            $usuario=$_POST['usuario'];
            $password=$_POST['pass'];
            $rol=$_POST['rol'];
            $sql = $conexion->query(" update usuarios set user ='$usuario', password = '$password', rol = '$rol' where ID = $id");
            if ($sql==1) {
                header("Location: panel.php"); 
            }else {
                echo "<div class='alert alert-danger'>Error al Modificar Los Datos de Usuario</div>";
            }
        }else{
            echo "<div class='alert alert-warning'>Debes Llenar Todos los Campos</div>";
        }
    }
   
?>