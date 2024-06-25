<!DOCTYPE html>
<?php
include "Modelo/conexion.php";
$id=$_GET["id"];
$sql = $conexion->query("select * from empleado where ID_Empleado=$id");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar_Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/f9b8092462.js" crossorigin="anonymous"></script>
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
        <h5 class="text-center text-secondary alert alert-primary">Modificar Datos del Empleado</h5>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>" >
       <?php
       include "Controlador/Editar_Empleado.php";
        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese Nombre</label>
        <input type="text" class="form-control" name="nombre" value="<?= $datos->Nombre ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese Apellido</label>
        <input type="text" class="form-control" name="apellido" value="<?= $datos->Apellido ?>">
     </div>
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese Carnet Identidad</label>
        <input type="text" class="form-control" name="ci" value="<?= $datos->CI_Empleado ?>">
     </div>
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese Profesion</label>
        <input type="text" class="form-control" name="prof" value="<?= $datos->Profesion ?>">
     </div>
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese Fecha Nacimiento</label>
        <input type="date" class="form-control" name="nac" value="<?= $datos->Fecha_Nac ?>">
     </div>
        <?php }
        ?>

    
 
  <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Guardar Cambios</button>
</form>
</body>
</html>