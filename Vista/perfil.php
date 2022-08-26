<?php 
session_start();
if ($_SESSION['usuarioo']){ 
?>
<?php

$id = isset($_GET['id'])?$_GET['id']:"";
echo "Hola este es tu perfil " .$id;
require_once '../Modelo/daoCasa.php';
$dao = new DaoCasa();
    $cliente = $dao->mostrarCasa($id); 
    ?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Mi Perfil</title>
    <script src="https://kit.fontawesome.com/48fc494f11.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b81162faad.js" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
                <?php
                if (isset($_SESSION['usuarioo'])){
                ?>
                <a class='nav-link active' aria-current='page' href='../indexarrendador.php?id=<?php echo $_SESSION['id'];?>'>Inicio</a>
                <?php  
                }else{
                ?><a class="nav-link active' aria-current='page' href='../index.html">Inicio</a>
                <?php 
                }
                ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="catalogo.php?id=<?php echo $_SESSION['id'];?>">Explorar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cuenta</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br><br>

<!--aqui esta el form-->

<div class="Contenedor-form">
    <form action="" method="post">

        <label >
            Nombre:
        </label>


        <label >
            Correo:
        </label>


        <label >
            Username:
        </label>


        <label >
            Telefono:
        </label>


        <label >
            Contraseña:
        </label>

        <label >
            Genero:
        </label>

        <label >
            Rol:
        </label>
    
    </form>
    </div>

<!--aqui termina el form-->
<div class="container-footer" id="footer">	
        <footer class="redes-footer">
          
            <div class="redes-footer">
                <a href="#"><i class="fab fa-facebook-f icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-twitter icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-instagram icon-redes-footer"></i></a>
            </div>    
            <hr>
            <h4>© 2022 Property Deluxe - Todos los Derechos Reservados</h4>

        </footer>
    </div>
</body>
</html>
<?php   
}else{
    echo "error";
}
?>


