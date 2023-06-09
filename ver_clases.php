<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>


<div id="ver_clases">
<?php 

include("conexion.php");

$consulta_clases = mysqli_query($conexion_sql, "SELECT * FROM clases");

while($mostrar_clases = mysqli_fetch_assoc($consulta_clases)) {
?>

<div class="caja_clases">
    <p>Unidad: <?php echo $mostrar_clases['unidad']; ?></p>
    <p>Fecha: <?php echo $mostrar_clases['fecha']; ?></p>
</div>

<?php 
}
?>

</div>
</body>