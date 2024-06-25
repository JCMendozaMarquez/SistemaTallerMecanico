<?php

    if (!empty($_POST["btnmodificar"])) {
        if (!empty($_POST["placa"]) and !empty($_POST["ci"]) and !empty($_POST["tipo"]) and !empty($_POST["desc"]) and !empty($_POST["fecha"])) {
            $id=$_POST['id'];
            
            $Placa=$_POST["placa"];
            $CI=$_POST["ci"];
            $Tipo=$_POST["tipo"];
            $Desc=$_POST["desc"];
            $Fecha=$_POST["fecha"];

            $sql = $conexion->query(" update diagnostico set Placa ='$Placa', CI_Empleado = '$CI', Tipo_Reparacion = '$Tipo', Descripcion = '$Desc', Fecha_Diagnostico = '$Fecha' where ID_Diagnostico = $id");
            if ($sql==1) {
                header("Location: Diagnostico.php"); 
            }else {
                echo "<div class='alert alert-danger'>Error al Modificar Los Datos del Diagnostico</div>";
            }
        }else{
            echo "<div class='alert alert-warning'>Debes Llenar Todos los Campos</div>";
        }
    }
   
?>