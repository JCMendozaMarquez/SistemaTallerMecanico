<?php

    if (!empty($_GET["id"])) {
        $id=$_GET['id'];
       
        $sql = $conexion->query("update clientes set Estado = 0 where ID_Cliente = $id");
        if ($sql==1) {
            echo '<div class="alert alert-success">Cliente Eliminado Correctamente</div>';
        }else {
            echo '<div class="alert alert-danger">Error al Eliminar</div>';
        }
    }
?>