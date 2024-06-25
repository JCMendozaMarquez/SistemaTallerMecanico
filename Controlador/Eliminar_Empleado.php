<?php

    if (!empty($_GET["id"])) {
        $id=$_GET['id'];
       
        $sql = $conexion->query("update empleado set Estado = 0 where ID_Empleado = $id");
        if ($sql==1) {
            echo '<div class="alert alert-success">Empleado Eliminado Correctamente</div>';
        }else {
            echo '<div class="alert alert-danger">Error al Eliminar</div>';
        }
    }
?>