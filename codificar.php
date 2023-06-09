<?php 
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT, array('cost'=>4));

$correo = $_POST['correo'];

include("conexion.php");

mysqli_query($conexion_sql, "INSERT INTO usuarios VALUES(DEFAULT, '$correo', '$contrasena')");
header("Location: unidad8.php?ok_consulta");
?>