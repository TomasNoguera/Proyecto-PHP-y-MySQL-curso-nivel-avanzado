<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Registro</h2>
		<form action="codificar.php" method="POST">
			<label>Ingrese su correo electronico:</label>
			<input type="email" name="correo" placeholder="Correo electronico">
			<label>Ingrese una contraseña:</label>
			<input type="password" name="contrasena" placeholder="Contraseña">
			<input type="submit" value="Ingresar">
		</form>

		<?php if(isset($_GET['ok_consulta'])){
			echo "<p>Usuario registrado correctamente.</p>";
		} ?>
	</section>
	<aside>
		<h2>Ingresar</h2>
	<form action="verificar.php" method="POST">
			<label>Ingrese su correo electronico:</label>
			<input type="email" name="correo" placeholder="Correo electronico">
			<label>Ingrese su contraseña:</label>
			<input type="password" name="contrasena" placeholder="Contraseña">
			<input type="submit" value="Ingresar">

			<?php if(isset($_GET['pass_ok'])){
			echo "<p>Datos verificados correctamente.</p>";
		} 
		if(isset($_GET['pass_error'])){
			echo "<p>Los datos ingresados son incorrectos.</p>";
		} ?>
		</form>
  </aside>
	<footer>
		<a>Programación en PHP y MySQL</a>
	</footer>
 
</div>
</body>
</html>