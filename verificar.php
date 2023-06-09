<?php
include("conexion.php");

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$consulta = mysqli_query($conexion_sql, "SELECT contrasena FROM usuarios WHERE correo = '$correo'");

$verificacion = mysqli_fetch_assoc($consulta);
$verificar = password_verify($contrasena, $verificacion['contrasena']);

if($verificar){
    header("Location: unidad8.php?pass_ok");
}
else{
    header("Location: unidad8.php?pass_error");
}

?>