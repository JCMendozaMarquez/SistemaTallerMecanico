<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["ci"]) and !empty($_POST["tel"]) and !empty($_POST["nac"]) ) {

            $Nombre=$_POST["nombre"];
            $Apellido=$_POST["apellido"];
            $Carnet=$_POST["ci"];
            $Telefono=$_POST["tel"];
            $Fecha_Nac=$_POST["nac"];
           
               
            $sql = $conexion->query("insert into clientes(CI_Cliente,Nombre,Apellido,Fecha_Nac,Telefono,Estado) values('$Carnet','$Nombre','$Apellido','$Fecha_Nac','$Telefono',1)");
            if ($sql==1) {
                echo '<div class="alert alert-success">Se ha Registrado al Cliente Correctamente</div>';
            }else{
                    echo '<div class="alert alert-danger">Error al Registrar Cliente</div>';
                }
            
        }else{
        echo '<div class="alert alert-success">Debe Llenar Todos Los Campos</div>';
    }
}
?>