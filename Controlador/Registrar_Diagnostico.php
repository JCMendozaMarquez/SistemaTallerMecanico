<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["placa"]) and !empty($_POST["ci"]) and !empty($_POST["tiporeparacion"]) and !empty($_POST["descripcion"]) and !empty($_POST["fecha"]) ) {

            $Placa=$_POST["placa"];
            $CI=$_POST["ci"];
            $Tipo=$_POST["tiporeparacion"];
            $Descripcion=$_POST["descripcion"];
            $Fecha=$_POST["fecha"];
            
            $sql = $conexion->query("insert into diagnostico(Placa,CI_Empleado,Tipo_Reparacion,Descripcion,Fecha_Diagnostico,Estado) values('$Placa','$CI','$Tipo','$Descripcion','$Fecha',1)");
            if ($sql==1) {
                echo '<div class="alert alert-success">Se ha Registrado el Diagnostico Correctamente</div>';
            }else{
                    echo '<div class="alert alert-danger">Error al Registrar Diagnostico</div>';
                }
            
        }else{
        echo '<div class="alert alert-success">Debe Llenar Todos Los Campos</div>';
    }
}
?>