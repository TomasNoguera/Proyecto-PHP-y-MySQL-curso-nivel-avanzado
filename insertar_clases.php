<?php 
$unidad = $_POST['unidad'];
$fecha = $_POST['fecha'];

include("conexion.php");

mysqli_query($conexion_sql, "INSERT INTO clases VALUES(DEFAULT,'$unidad','$fecha')");

header("Location: unidad1.php?ok_consulta#info_clases");

?>