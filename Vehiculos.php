<html>
<head>
          <link rel="stylesheet" href="css/normalize.css">  
   <!----><link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
          <link rel="stylesheet" href="css/bootstrap.css">
          <link rel="stylesheet" href="css/style-portfolio.css">  
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <!--   <div class="container">                     -->
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display                  -->
                <!--    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
-->
                          <ul class="nav navbar-nav main-nav  clear navbar-right ">   
                            <li><a class="navactive color_animation" href="panel.php">MIS USUARIOS</a></li>            
                            <li><a class="color_animation" href="Empleados.php">MIS EMPLEADOS</a></li>                        
                            <li><a class="color_animation" href="Clientes.php">MIS CLIENTES</a></li>
                            <li><a class="color_animation" href="Vehiculos.php">MIS VEHICULOS</a></li>
                            <li><a class="color_animation" href="Diagnostico.php">MIS DIAGNOSTICOS</a></li>
                            <li><a class="color_animation" href="index.php">CERRAR SESION </a></li>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
    <!-- CSS only -->
    </head>
<body>


<!--fin aaa -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculos</title>
    <!-- CSS only -->
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
-->
<script src="https://kit.fontawesome.com/f9b8092462.js" crossorigin="anonymous"></script>
</head>
<body>
  <script>
    function eliminar(){
      var respuesta=confirm("Estas Seguro de Eliminar un Vehiculo");
      return respuesta
    }
  </script>
  <?php
  //include "Menu_Administrador.php";
  ?>
   <!-- <h1 class="text-center p-3 ">ADMINISTRAR VEHICULOS</h1>  -->
    <?php
      include "Modelo/conexion.php";
      include "Controlador/Eliminar_Vehiculo.php"
    ?>
    <div class="container-fluid row">
    <form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secondary alert alert-primary">Registro de Vehiculos</h3>
       
       <?php
        include "Controlador/logout.php"; 
        include "Controlador/Registrar_Vehiculo.php";
        ?>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese Nro. de Placa</label>
        <input type="text" class="form-control" name="placa">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese Carnet Cliente</label>
        <input type="text" class="form-control" name="ci">
     </div>
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese Marca</label>
        <input type="text" class="form-control" name="marca">
     </div>
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese Modelo</label>
        <input type="text" class="form-control" name="modelo">
     </div>
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese Color</label>
        <input type="text" class="form-control" name="color">
     </div>
 
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
  <button type="submit" class="btn btn-danger" name="btnCerrarSesion" value="ok"><a href="Menu_Administrador.php">Volver al Menu</a></button>
  
</form>
    <div class="col-8 p-4">
    <table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Placa</th>
      <th scope="col">Cliente</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Color</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "Modelo/conexion.php";
    $sql = $conexion->query("select * from vehiculos");
    while ($datos = $sql->fetch_object()) { ?>
         <tr>
      <td><?=$datos->ID_Vehiculo?></td>
      <td><?=$datos->Placa?></td>
      <td><?=$datos->CI_Cliente?></td>
      <td><?=$datos->Marca?></td>
      <td><?=$datos->Modelo?></td>
      <td><?=$datos->Color?></td>
      <td>
            <a href="Modificar_Vehiculo.php?id=<?= $datos->ID_Vehiculo ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
            <a onclick="return eliminar()" href="Vehiculos.php?id=<?= $datos->ID_Vehiculo?>" class="btn btn-small btn-danger"><i class="fa-solid fa-user-xmark"></i></a>
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

