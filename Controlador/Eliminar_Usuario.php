<?php

    if (!empty($_GET["id"])) {
        $id=$_GET['id'];
       
        $sql = $conexion->query("update usuarios set Estado = 0 where ID = $id");
        if ($sql==1) {
            echo '<div class="alert alert-success">Usuario Eliminado Correctamente</div>';
        }else {
            echo '<div class="alert alert-danger">Error al Eliminar</div>';
        }
    }
?>