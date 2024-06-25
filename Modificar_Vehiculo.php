<!DOCTYPE html>
<?php
include "Modelo/conexion.php";
$id=$_GET["id"];
$sql = $conexion->query("select * from vehiculos where ID_Vehiculo=$id");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar_Vehiculo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/f9b8092462.js" crossorigin="anonymous"></script>
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
        <h5 class="text-center text-secondary alert alert-primary">Modificar Datos del Vehiculo</h5>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>" >
       <?php
       include "Controlador/Editar_Vehiculo.php";
        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese Placa</label>
        <input type="text" class="form-control" name="placa" value="<?= $datos->Placa ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese CI Cliente</label>
        <input type="text" class="form-control" name="ci" value="<?= $datos->CI_Cliente ?>">
     </div>
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese Marca</label>
        <input type="text" class="form-control" name="marca" value="<?= $datos->Marca ?>">
     </div>
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese Modelo</label>
        <input type="text" class="form-control" name="modelo" value="<?= $datos->Modelo ?>">
     </div>
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese Color</label>
        <input type="text" class="form-control" name="color" value="<?= $datos->Color ?>">
     </div>
        <?php }
        ?>

    
 
  <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Guardar Cambios</button>
</form>
</body>
</html>