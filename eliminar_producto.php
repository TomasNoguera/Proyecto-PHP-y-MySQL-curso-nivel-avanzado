<?php  
include('clases/base_datos.php'); 
include('clases/carrito.php'); 
include('constantes.php'); 
$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE); 
$prod = new carrito($base); 
$prod->eliminar_compra($_GET['id']);
header("Location:unidad7.php"); 
?>