<?php

    if (!empty($_POST["btnmodificar"])) {
        if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["ci"]) and !empty($_POST["prof"]) and !empty($_POST["nac"])) {
            $id=$_POST['id'];
            $Nombre=$_POST["nombre"];
            $Apellido=$_POST["apellido"];
            $Carnet=$_POST["ci"];
            $Profesion=$_POST["prof"];
            $Fecha_Nac=$_POST["nac"];

            $sql = $conexion->query(" update empleado set Nombre ='$Nombre', Apellido = '$Apellido', CI_Empleado = '$Carnet', Fecha_Nac = '$Fecha_Nac', Profesion = '$Profesion' where ID_Empleado = $id");
            if ($sql==1) {
                header("Location: Empleados.php"); 
            }else {
                echo "<div class='alert alert-danger'>Error al Modificar Los Datos del Empleado</div>";
            }
        }else{
            echo "<div class='alert alert-warning'>Debes Llenar Todos los Campos</div>";
        }
    }
   
?>