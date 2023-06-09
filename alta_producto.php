<?php
include('clases/base_datos.php');
include('clases/productos.php');
include('clases/carrito.php');
include('constantes.php');

$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
$prod = new Productos($base);
$prod->insertarProducto($_POST['codigo'], $_POST['producto'], $_POST['descripcion'], $_POST['precio']);
header("Location: unidad7.php?ok_consulta");
?>