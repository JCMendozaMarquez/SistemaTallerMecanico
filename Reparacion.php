<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/f9b8092462.js" crossorigin="anonymous"></script>
</head>
<body>
  <script>
    function eliminar(){
      var respuesta=confirm("Estas Seguro de Eliminar un Empleado");
      return respuesta
    }
  </script>
    <h1 class="text-center p-3 ">ADMINISTRAR EMPLEADOS</h1>
    <?php
      include "Modelo/conexion.php";
      include "Controlador/Eliminar_Empleado.php"
    ?>
    <div class="container-fluid row">
    <form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secondary alert alert-primary">Registro de Empleados</h3>
       
       <?php
        include "Controlador/logout.php"; 
        include "Controlador/Registrar_Empleado.php";
        ?>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese Nombre</label>
        <input type="text" class="form-control" name="nombre">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese Apellido</label>
        <input type="text" class="form-control" name="apellido">
     </div>
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese Carnet de Identidad</label>
        <input type="text" class="form-control" name="ci">
     </div>
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese Profesion</label>
        <input type="tel" class="form-control" name="prof">
     </div>
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Fecha Nacimiento</label>
        <input type="date" class="form-control" name="nac">
     </div>
 
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
  <button type="submit" class="btn btn-danger" name="" value="ok"><a href="Menu_Administrador.php">Volver al Menu</a></button>
  
</form>
    <div class="col-8 p-4">
    <table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Carnet Identidad</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Profesion</th>
      <th scope="col">Fecha Nacimiento</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "Modelo/conexion.php";
    $sql = $conexion->query("select * from empleado where Estado = 1");
    while ($datos = $sql->fetch_object()) { ?>
         <tr>
      <td><?=$datos->ID_Empleado?></td>
      <td><?=$datos->CI_Empleado?></td>
      <td><?=$datos->Nombre?></td>
      <td><?=$datos->Apellido?></td>
      <td><?=$datos->Profesion?></td>
      <td><?=$datos->Fecha_Nac?></td>
      <td>
            <a href="Modificar_Empleado.php?id=<?= $datos->ID_Empleado?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
            <a onclick="return eliminar()" href="Empleados.php?id=<?= $datos->ID_Empleado?>" class="btn btn-small btn-danger"><i class="fa-solid fa-user-xmark"></i></a>
      </td>
    </tr>
    <?php }
    ?>
   

  </tbody>
</table>

    </div>

    </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>


