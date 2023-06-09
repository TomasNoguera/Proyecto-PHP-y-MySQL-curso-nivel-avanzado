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
		<h2>Comentarios</h2>		
		<?php  
		$abrir_archivo = fopen ('comentarios.txt', 'r');
		fpassthru($abrir_archivo);
		fclose($abrir_archivo);
	?>

	</section>
	
	<aside>
	<form action="unidad3.php" method="POST">
			<input type="text" name="datos_usuario" placeholder="Nombre y Apellido" required>
			<input type="email" name="correo" placeholder="Mail" required>
			<textarea name="comentario" cols="30" rows="10" required></textarea>
			<input type="submit" value="Enviar">
		</form>

	<?php  
		include('comentarios.php');
	?>
  </aside>
	<footer>
		<a>Programación en PHP y MySQL</a>
	</footer>
 
</div>
</body>
</html>