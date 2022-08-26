<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
                
                <?php
                require_once '../Controlador/controlArrendador.php';
                session_start();
                if (isset($_SESSION['usuarioo'])){

                 if(isset($_SESSION['rol'])=="arrendador"){
                  ?>
                  <a class='nav-link active' aria-current='page' href='../indexarrendador.php?id=<?php echo $_SESSION['id'];?>'>Inicio</a>
                 
                  <?php
                  
                 }else{
                  ?>
                  <a class='nav-link active' aria-current='page' href='../indexusuario.php?id=<?php echo $_SESSION['id'];?>'>Inicio</a>
                  <?php
                 }
                ?>
                
                  
                  
                  
                <?php  }else{
                  ?><a class='nav-link active' aria-current='page' href='../index.html'>Inicio</a>
                <?php 
                }
                ?>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Servicios</a>
              </li>
              <li class="nav-item">
              <?php
                if (isset($_SESSION['usuarioo'])){
                ?>

                <a class="nav-link" href="catalogo.php?id=<?php echo $_SESSION['id'];?>">Explorar</a>
                <?php  }else{
                  ?><a class="nav-link" href="catalogo.php">Explorar</a>
                <?php }
                
                ?>
                
              </li>
              <li class="nav-item">
              <li><a id='icono2'  class='nav-link active' href='registro-casa.php?id=<?php echo $_SESSION['id'];?>'>Publica tu Casa</a></li>
              <?php
                if (isset($_SESSION['usuarioo'])){
                ?>

                <li><a class="nav-link" href="../cerrarsesion.php">Cerrar Sesión</a></li>
                <?php  }else{
                  ?><a class="nav-link" href="form.php">Cuenta</a>
                <?php }
                
                ?>
                
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <h1 class="title">Busca un nuevo hogar</h1>
      <div class="search_wrap search_wrap">
          <div class="search_box">
              <div class="btn btn_common">
                  <i class="fas fa-search"></i>
              </div>
              <input type="text" class="input" placeholder="Buscar"> 
          </div>
      </div>

     

<section class='background-cards'>
<?php
$conn= mysqli_connect('localhost', 'property', '123456', 'property-deluxe' );
$query = "SELECT * FROM casa";

if ($result = $conn->query($query) ) {
    while ($row = $result->fetch_assoc()){

      ?>
    <div class="card">
      <img src="../portada/<?php echo $row["foto"] ;?>" alt="">
            <?php
  

        $field1name = $row["nom"];
        $field2name = $row["direc"];
        $field3name = $row["precio"];
        $field4name = $row["depa"];
        
        echo '<h2>'.$field1name.'</h2>';
        echo '<hr>';
        echo "Dirección: ".$field2name.'<br />';
        echo "Precio: ".$field3name.'<br />';
        echo "Departamento: ".$field4name.'<br />';
        echo "<a href='review.php'>Deja de tu reseña!</a>";
        ?>
     <a href="verMas.php?idCasa=<?php echo $row['idPropiedad'];?>">Ver mas</a>        <?php
    echo "</div>";
  }
  ?>


<?php
}
/*freeresultset*/
$result->free();
?>


</section>
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

          <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</body>
</html>
