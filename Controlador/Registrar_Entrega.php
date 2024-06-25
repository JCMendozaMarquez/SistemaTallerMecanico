<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["ci"]) and !empty($_POST["prof"]) and !empty($_POST["nac"]) ) {

            $Nombre=$_POST["nombre"];
            $Apellido=$_POST["apellido"];
            $Carnet=$_POST["ci"];
            $Profesion=$_POST["prof"];
            $Fecha_Nac=$_POST["nac"];
            
            $sql = $conexion->query("insert into empleado(CI_Empleado,Nombre,Apellido,Fecha_Nac,Profesion,Estado) values('$Carnet','$Nombre','$Apellido','$Fecha_Nac','$Profesion',1)");
            if ($sql==1) {
                echo '<div class="alert alert-success">Se ha Registrado al Empleado Correctamente</div>';
            }else{
                    echo '<div class="alert alert-danger">Error al Registrar Empleado</div>';
                }
            
        }else{
        echo '<div class="alert alert-success">Debe Llenar Todos Los Campos</div>';
    }
}
?>