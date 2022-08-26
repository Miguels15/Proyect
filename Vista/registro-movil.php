
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registra tu propiedad</title>
    <link rel="stylesheet" href="../css/arrendador.css">
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
    		<form action="../Controlador/controlCliente.php" method="post" id="registro">
                <br>
			<h1>Registrar usuario</h1>

			<span>Ingresa la información</span>
      <input type="text" name="nom" placeholder="Nombre" id="nombre">
      <span id="nomError" class="Error"></span>
			<input type="email" name="email" placeholder="Correo" id="mail">
      <span id="emailError" class="Error"></span>
			<input type="text" name="username" placeholder="Username" id="usuario">
      <span id="userError" class="Error"></span>
			<input type="tel" name="telefono" placeholder="Telefono" id="telefono">
      <span id="telError" class="Error"></span>
			<input type="password" name="pass" placeholder="Contraseña" id="contra">
      <span id="passError" class="Error"></span>
			<select name="genero" id="generos">
				<option selected disabled="">Selecciona una opción</option>
				<option value="1">Femenino</option>
				<option value="2">Masculino</option>
			</select>
      <span id="genError" class="Error"></span>
      <input type="hidden" name="accion" value="Registrarse">
            <input type="submit" name="action" value="Registrarse" class="botonR">
            <a href="registro-arrendador.php">¿Eres dueño de una casa, registrate como arrendador?</a>
			<script src="../js/validarForm.js"></script>


		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
        <div class="overlay-panel overlay-right">

        <h1>Hola amigo!</h1>
				<p>Es un gusto tenerte navegando en nuestro sitio!</p>
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