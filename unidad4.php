<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" type="text/css" href="bootstrapcss/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
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
		<h2>Imágenes con PHP</h2>		
		<?php
			if (imagetypes() & IMG_GIF) {
			echo "El tipo GIF es soportado<br>";
			}else{
			echo "El tipo GIF NO ES SOPORTADO<BR>";
			}
			if (imagetypes() & IMG_PNG) {
			echo "El tipo PNG es soportado<br>";
			}else{
			echo "El tipo PNG NO ES SOPORTADO<BR>";
			}
			if (imagetypes() & IMG_JPG) {
			echo "El tipo JPG es soportado<br>";
			}else{
			echo "El tipo JPG NO ES SOPORTADO<BR>";
			}
			if (imagetypes() & IMG_WBMP) {
			echo "El tipo WBMP es soportado<br>";
			}else{
			echo "El tipo WBMP NO ES SOPORTADO ";
			}
			?>
		
		
		<div>
			<h3>Marca de agua</h3>
			<img src="marca_agua.php" alt="Imagen con marca de agua" class="marca_agua">
		</div>
	</section>

	<aside>
    <div>
		<h3>Thumbnail, haga click para agrandar</h3>
		<a href="imagenes/unidad4.jpg" data-lightbox="image-1">
		<img src="thumbnail.php" alt="thumbnail" class="rounded mx-auto d-block"></a>
	</div>
  </aside>

	<footer>
		<a>Programación en PHP y MySQL</a>
	</footer>
</div>

<script type="text/javascript" src="bootstrapjs/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>

</body>
</html>