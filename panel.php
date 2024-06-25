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


<?php
/*session_start();
$name = $_SESSION['usuario'];

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}
if ($_SESSION['rol'] == 'user') {
    header('Location: user.php');
    exit();
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Usuarios</title>
    <!-- CSS only -->
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
-->
<script src="https://kit.fontawesome.com/f9b8092462.js" crossorigin="anonymous"></script>
</head>
<body>
  <script>
    function eliminar(){
      var respuesta=confirm("Estas Seguro de Eliminar un Usuario");
      return respuesta
    }
  </script>
  <!--  <h1 class="text-center p-3 ">ADMINISTRAR USUARIOS</h1>  -->
    <?php
      include "Modelo/conexion.php";
      include "Controlador/Eliminar_Usuario.php"
    ?>
    <div class="container-fluid row">
    <form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secondary alert alert-primary">Registro de Usuarios</h3>
       
       <?php
        include "Controlador/logout.php"; 
        include "Controlador/Registro_Usuario.php";
        ?>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese Nombre de Usuario</label>
        <input type="text" class="form-control" name="usuario">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrese Password</label>
        <input type="password" class="form-control" name="pass">
     </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Rol de Usuario</label> <br>
        <input type="radio"  name="rol" id="roluser" value="user">
        <label for="roluser">Usuario</label>
        <input type="radio" name="rol"  id="roladmin" value="admin">
        <label for="roladmin">Administrador</label>   
      </div>
 
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>

  
</form>
    <div class="col-8 p-4">
    <table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Usuario</th>
      <th scope="col">Password</th>
      <th scope="col">Rol</th>
      <th scope="col">Estado</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "Modelo/conexion.php";
    $sql = $conexion->query("select * from usuarios where Estado = 1");
    while ($datos = $sql->fetch_object()) { ?>
         <tr>
      <td><?=$datos->ID?></td>
      <td><?=$datos->user?></td>
      <td><?=$datos->password?></td>
      <td><?=$datos->rol?></td>
      <td><?=$datos->Estado?></td>
      <td>
            <a href="Modificar.php?id=<?= $datos->ID ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
            <a onclick="return eliminar()" href="panel.php?id=<?= $datos->ID?>" class="btn btn-small btn-danger"><i class="fa-solid fa-user-xmark"></i></a>
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

