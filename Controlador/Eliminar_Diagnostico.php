<?php

    if (!empty($_GET["id"])) {
        $id=$_GET['id'];
       
        $sql = $conexion->query("update diagnostico set Estado = 0 where ID_Diagnostico = $id");
        if ($sql==1) {
            echo '<div class="alert alert-success">Diagnostico Eliminado Correctamente</div>';
        }else {
            echo '<div class="alert alert-danger">Error al Eliminar</div>';
        }
    }
?>