<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["usuario"]) and !empty($_POST["pass"]) and !empty($_POST["rol"]) ) {

            $usuario=$_POST["usuario"];
            $password=$_POST["pass"];
            $rol=$_POST["rol"];
               
            $sql = $conexion->query("insert into usuarios(user,password,rol,Estado) values('$usuario','$password','$rol',1)");
            if ($sql==1) {
                echo '<div class="alert alert-success">Se ha Registrado al Usuario Correctamente</div>';
            }else{
                    echo '<div class="alert alert-danger">Error al Registrar Usuario</div>';
                }
            
        }else{
        echo '<div class="alert alert-success">Debe Llenar Todos Los Campos</div>';
    }
}
?>