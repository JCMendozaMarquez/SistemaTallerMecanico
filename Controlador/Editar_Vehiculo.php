<?php

    if (!empty($_POST["btnmodificar"])) {
        if (!empty($_POST["placa"]) and !empty($_POST["ci"]) and !empty($_POST["marca"]) and !empty($_POST["modelo"]) and !empty($_POST["color"])) {
            $id=$_POST['id'];
            
            $Placa=$_POST["placa"];
            $CI=$_POST["ci"];
            $Marca=$_POST["marca"];
            $Modelo=$_POST["modelo"];
            $Color=$_POST["color"];

            $sql = $conexion->query(" update vehiculos set Placa ='$Placa', CI_Cliente = '$CI', Marca = '$Marca', Modelo = '$Modelo', Color = '$Color' where ID_Vehiculo = $id");
            if ($sql==1) {
                header("Location: Vehiculos.php"); 
            }else {
                echo "<div class='alert alert-danger'>Error al Modificar Los Datos de Vehiculo</div>";
            }
        }else{
            echo "<div class='alert alert-warning'>Debes Llenar Todos los Campos</div>";
        }
    }
   
?>