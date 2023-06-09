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
		<h2>Eventos</h2>		
		<?php
			date_default_timezone_set('America/Argentina/Buenos_Aires');
			setlocale(LC_TIME, 'spanish');
			echo"<p>".strftime('Fecha: %A, %d de %B de %Y')."</p>"
		?>
		
		<form action="unidad2.php" method="POST">
			<input type="number" name="dia" min="1" max="31" placeholder="Dia">
			<input type="number" name="mes" min="1" max="12" placeholder="Mes">
			<input type="number" name="ano" placeholder="Año">
			<input type="submit" value="Calcular">
		</form>

		<?php include("calculo_fecha.php"); ?>

	</section>

	<aside>

  </aside>
	<footer>
		<a>Programación en PHP y MySQL</a>
	</footer>
 
</div>
</body>
</html>