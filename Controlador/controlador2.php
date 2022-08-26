<?php 
session_start();
if ($_SESSION['usuarioo']){ 
?>
<?php
$id = isset($_GET['id'])?$_GET['id']:"";
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
    <title>Registra tu propiedad</title>
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
<!--Inicio de formulario para registrar casa-->
<div class="container" id="container">

	<div class="form-container sign-in-container">
    		<form action="controlador3.php" method="post" enctype="multipart/form-data">
                <br>
			<h1>Información de la propiedad</h1>

			<span>Ingresa la información</span>
            <label>
                Imagen actual de portada:
        </label>
        <img src='../portada/<?php ECHO $cliente['foto'] ?>' alt='' width='150px'>
        <label>
                Nombre (Info):
        </label>
			<input type="text" name="nomp" autocomplete="off" placeholder="<?php ECHO $cliente['nom']?> " value="<?php ECHO $cliente['nom'] ?>">
			<label>
                Dirección:
        </label>
            <input type="text" name="direc" autocomplete="off" placeholder="<?php ECHO $cliente['direc']?>" value="<?php ECHO $cliente['direc']?>">
            
            <label>
                Precio Actual:
        </label>
        <input type="text" name="precio" autocomplete="off" placeholder="<?php ECHO $cliente['precio']?>" value="<?php ECHO $cliente['precio']?>" readonly>
        <label>
                Modificar precio:
        </label>
        <input type="number" name="precio" autocomplete="off" placeholder="<?php ECHO $cliente['precio']?>" value="<?php ECHO $cliente['precio']?>" >
        <label>
                departamento Actual:
        </label>
        <input type="text" name="depa" autocomplete="off" placeholder="<?php ECHO $cliente['depa']?>" value="<?php ECHO $cliente['depa']?>" readonly>
        <label>
               Modificar Departamento:
        </label>
        <select name="depa">
				<option value="<?php ECHO $cliente['depa']?>" placeholder="<?php ECHO $cliente['depa']?>"><?php ECHO $cliente['depa']?></option>
				<option value="Ahuachapán">Ahuachapán</option>
				<option value="Cabañas">Cabañas</option>
                <option value="Chalatenango">Chalatenango</option>
				<option value="Cuscatlán">Cuscatlán</option>
                <option value="La Libertad">La Libertad</option>
				<option value="Morazán">Morazán</option>
                <option value="La Paz">La Paz</option>
				<option value="Santa Ana">Santa Ana</option>
                <option value="San Miguel">San Miguel</option>
				<option value="San Salvador">San Salvador</option>
                <option value="San Vicente">San Vicente</option>
				<option value="Sonsonate">Sonsonate</option>
                <option value="La Unión">La Unión</option>
				<option value="Usulután">Usulután</option>
			</select>
            <label>
               Descripción:
        </label>
      <textarea name="descu" placeholder="<?php ECHO $cliente['descu']?>" value="<?php ECHO $cliente['descu']?>" id="text"te cols="30" rows="10"></textarea>

      <input type="hidden"  name="elid" value="<?php ECHO $cliente['idPropiedad']?>">
      
     
      <input type="file" name="images" accept="image/*">

      <input type="file" name="image[]" multiple accept="image/*">
      <input type="submit" name="accion" value="Registrar propiedad" class="botonR">

		</form>
	</div>
	
</div>
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