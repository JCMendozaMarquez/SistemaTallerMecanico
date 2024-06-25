<?php

    if (!empty($_POST["btnmodificar"])) {
        if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["ci"]) and !empty($_POST["tel"]) and !empty($_POST["nac"])) {
            $id=$_POST['id'];
            
            $Nombre=$_POST["nombre"];
            $Apellido=$_POST["apellido"];
            $Carnet=$_POST["ci"];
            $Telefono=$_POST["tel"];
            $Fecha_Nac=$_POST["nac"];

            $sql = $conexion->query(" update clientes set Nombre ='$Nombre', Apellido = '$Apellido', CI_Cliente = '$Carnet', Fecha_Nac = '$Fecha_Nac', Telefono = '$Telefono' where ID_Cliente = $id");
            if ($sql==1) {
                header("Location: Clientes.php"); 
            }else {
                echo "<div class='alert alert-danger'>Error al Modificar Los Datos de Usuario</div>";
            }
        }else{
            echo "<div class='alert alert-warning'>Debes Llenar Todos los Campos</div>";
        }
    }
   
?>