<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["placa"]) and !empty($_POST["ci"]) and !empty($_POST["marca"]) and !empty($_POST["modelo"]) and !empty($_POST["color"]) ) {

            $Placa=$_POST["placa"];
            $Carnet=$_POST["ci"];
            $Marca=$_POST["marca"];
            $Modelo=$_POST["modelo"];
            $Color=$_POST["color"];
            
            $sql = $conexion->query("insert into vehiculos(Placa,CI_Cliente,Marca,Modelo,Color) values('$Placa','$Carnet','$Marca','$Modelo','$Color')");
            if ($sql==1) {
                echo '<div class="alert alert-success">Se ha Registrado al Vehiculo Correctamente</div>';
            }else{
                    echo '<div class="alert alert-danger">Error al Registrar Vehiculo</div>';
                }
            
        }else{
        echo '<div class="alert alert-success">Debe Llenar Todos Los Campos</div>';
    }
}
?>