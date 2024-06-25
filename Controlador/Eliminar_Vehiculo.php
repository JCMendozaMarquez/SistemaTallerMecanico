<?php

    if (!empty($_GET["id"])) {
        $id=$_GET['id'];
       
        $sql = $conexion->query("delete from vehiculos where ID_Vehiculo = $id");
        if ($sql==1) {
            echo '<div class="alert alert-success">Vehiculo Eliminado Correctamente</div>';
        }else {
            echo '<div class="alert alert-danger">Error al Eliminar</div>';
        }
    }
?>