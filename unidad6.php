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
		<h2>Usuarios</h2>
		<?php include("caract_usuarios.php"); ?>
	</section>
	<aside>
		<?php
			date_default_timezone_set('America/Argentina/Buenos_Aires');
			setlocale(LC_TIME, 'spanish');
			echo"<p>".strftime('Fecha de hoy: %A, %d de %B de %Y.')."</p>"
		?>
  </aside>
	<footer>
		<a>Programación en PHP y MySQL</a>
	</footer>
 
</div>
</body>
</html>