<?php
session_start();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$consulta = $_POST['consulta'];
$codigo = $_POST['codigo'];

if ($codigo == $_SESSION['captcha']){
    include("conexion.php");
    mysqli_query($conexion_sql, "INSERT INTO consultas VALUES(DEFAULT, '$nombre','$apellido','$correo','$consulta')");
    
    header("Location: unidad5.php?ok_consulta");
    }
    else {
        header("Location: unidad5.php?error");
    }
?>