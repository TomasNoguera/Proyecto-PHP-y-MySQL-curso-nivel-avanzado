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
		<h2>Carrito:</h2>
		<?php
		include('clases/base_datos.php');
		include('clases/productos.php');
		include('clases/carrito.php');
		include('constantes.php');
	
		$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
		$prod = new Productos($base);

		$mostrar_productos = $prod->seleccionarProductos();
		?>
		<table>
			<tr>  
				<th>Código</th> 
				<th>Producto</th>  
				<th>Descripcion</th> 
				<th>Precio</th>
			</tr>
			
		<?php 
			for($i=0; $i<count($mostrar_productos); $i++){
		?>
			<tr>
				<td><?php echo $mostrar_productos[$i]['codigo'];?></td>
				<td><?php echo $mostrar_productos[$i]['producto'];?></td>
				<td><?php echo $mostrar_productos[$i]['descripcion'];?></td>
				<td><?php echo $mostrar_productos[$i]['precio'];?></td>
				<td><a href="eliminar_producto.php?id=<?php echo $mostrar_productos[$i]['id_compra'];?>">Eliminar</a></td>
			</tr>
		<?php } ?>
		</table>	
	</section>
	
	<aside>
	<h2>Compras</h2>
		<form action="alta_producto.php" method="POST">
			<label>Codigo del producto:</label>
			<input type="number" name="codigo" placeholder="Codigo">
			
			<label for="producto">Nombre del producto:</label>
			<input type="text" name="producto" placeholder="Nombre">
			
			<label>Descripcion del producto:</label>
			<textarea name="descripcion" cols="30" rows="10"></textarea>
			
			<br><label>Precio:</label></br>
			<input type="text" name="precio" placeholder="Precio">
			<input type="submit" value="Comprar">
		</form>
		<?php if(isset($_GET['ok_consulta'])){
			echo "<p>Producto cargado.</p>";
		} ?>
  </aside>
	<footer>
		<a>Programación en PHP y MySQL</a>
	</footer>
 
</div>
</body>
</html>