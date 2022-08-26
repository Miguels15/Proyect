<?php 
session_start();
if ($_SESSION['usuarioo']){ 
?>
<!DOCTYPE html>
<html lang="es">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="vista/main2.js"></script>
    
    <link rel="stylesheet" href="../css/busqueda.css">
    <title>Buscar una vivienda</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PROPERTY DELUXE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../inde2.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="catalogo.php">Explorar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="vistaAdmin.php">Lista Usarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="vistaAdminP.php">Listado de Propiedades</a>
        </li>
        <li>
          <a class="nav-link" href="form.php">Cuenta</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<h1 class="title">Buscar usuario</h1>
<div class="search_wrap search_wrap">
    <div class="search_box">
        <div class="btn btn_common">
            <i class="fas fa-search"></i>
        </div>
        <input type="text" class="input" placeholder="Buscar">
    </div>
</div>
<div class="tabla">
<h3 class="clie">Listado usuarios</h3>
<table class="table table-striped table-dark">
            <tr>
            <th scope="col">id</th><th scope="col">Nombre</th><th scope="col">Username</th><th scope="col">Rol</th><th scope="col">Modificar</th><th scope="col">Eliminar</th>
            </tr>
<?php

    if(!isset($cliente)){
        require_once "../Modelo/daoCliente.php";
    }else
        require_once "../Modelo/daoCliente.php";
    $dao = new DaoClient();
    $clientes = $dao->listadoClientes();
    $enlace ="<a href='../Controlador/controlCliente.php?accion=modificar&id=";
    $enlace2 ="<a href='../Controlador/controlCliente.php?accion=eliminar&id=";
    foreach($clientes as $cliente){
        echo "<tr><td>". $cliente['Id_Usuario'] ."</td><td>". $cliente['nombre'] ."</td><td>". $cliente['username'] ."</td><td>". $cliente['rol'] ."</td><td>".$enlace . $cliente['Id_Usuario'] ."'><i class='fas fa-edit'></i></a></td><td>".$enlace2 . $cliente['Id_Usuario'] ."'><i class='fas fa-trash-alt'></i></a></td></tr>";
    }
?>
    </table>
    </div>

    <h3 class="clie">Listado usuarios Arrendadores</h3>
<table class="table table-striped table-dark">
            <tr>
            <th scope="col">id</th><th scope="col">Nombre</th><th scope="col">Username</th><th scope="col">Rol</th><th scope="col">Modificar</th><th scope="col">Eliminar</th>
            </tr>
<?php

    if(!isset($cliente)){
        require_once "../Modelo/daoCliente.php";
    }else
        require_once "../Modelo/daoCliente.php";
    $dao = new DaoClient();
    $clientes = $dao->listadoClientesArrendador();
    $enlace ="<a href='../Controlador/controlCliente.php?accion=modificarA&id=";
    $enlace2 ="<a href='../Controlador/controlCliente.php?accion=eliminarA&id=";
    foreach($clientes as $cliente){
        echo "<tr><td>". $cliente['Id_Arrendador'] ."</td><td>". $cliente['nombre'] ."</td><td>". $cliente['username'] ."</td><td>". $cliente['rol'] ."</td><td>".$enlace . $cliente['Id_Arrendador'] ."'><i class='fas fa-edit'></i></a></td><td>".$enlace2 . $cliente['Id_Arrendador'] ."'><i class='fas fa-trash-alt'></i></a></td></tr>";
    }
?>
    </table>
    </div>

    <script src="js/validarForm.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</body>
</html>
<?php   
}else{
    header("location:index.html");
}
?>