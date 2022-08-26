
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registra tu propiedad</title>
    <link rel="stylesheet" href="../css/propiedad.css">
    <script src="https://kit.fontawesome.com/48fc494f11.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b81162faad.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
          <a class="nav-link active" aria-current="page" href="../index.html">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="catalogo.php">Explorar</a>
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
    		<form action="../Controlador/controlCasas.php" method="post" enctype="multipart/form-data">
                <br>
			<h1>Registrar propiedad</h1>

			<span>Ingresa la información</span>
			<input type="text" name="nomp" autocomplete="off" placeholder="Nombre de la propiedad">
			<input type="text" name="direc" autocomplete="off" placeholder="Dirección de la casa">
            <input type="number" name="precio" autocomplete="off" placeholder="Precio de la propiedad en dolares $">
            <select name="depa">
				<option selected disabled="">Departamento en el que se ubica.</option>
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
      <textarea name="descu" placeholder="Ingresa una descripción de la propiedad" id="text"te cols="30" rows="10"></textarea>
      <input type="file" name="images">

      <input type="file" name="image[]" multiple>
      <input type="submit" name="accion" value="Registrar propiedad" class="botonR">

		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
        <div class="overlay-panel overlay-right">

        <h1>Pon en alquiler tu propiedad!</h1>
				<p>Es un gusto poder ayudarte en el proceso de alquiler de tu casa!</p>
			</div>
         
		</div>
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