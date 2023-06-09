<?php session_start(); ?>
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
		<?php function contenido_captcha(){
				$pattern = "1234567890wasdgmrgkrjnmab$#/!%";
				$clave = '';
				for($i=0; $i<8; $i++){
					$clave .= $pattern[rand(0,29)];	
				}
				return $clave;
			}
			$_SESSION['captcha'] = contenido_captcha();
			?>

		<h2>Consultas</h2>
		<form action="cargar.php" method="POST">
			<input type="text" name="nombre" placeholder="Nombre" required>
			<input type="text" name="apellido" placeholder="Apellido" required>
			<input type="email" name="correo" placeholder="Correo" required>
			<textarea name="consulta" cols="30" rows="10" required></textarea>
			<img src="imagen_captcha.php" alt="capcha" class="captcha">
			<input type="text" name="codigo" placeholder="captcha" required>
			<input type="submit" value="Enviar">
		</form>

		<?php	
			if(isset($_GET["ok_consulta"])){
				echo "<p>El codigo ingresado es correcto.</p>";
			}
			else if(isset($_GET["error"])){
				echo "<p>El codigo ingresado es incorrecto.</p>";
			}
			?>

	</section>
	<aside>
    
  </aside>
	<footer>
		<a>Programación en PHP y MySQL</a>
	</footer>
 
</div>
</body>
</html>