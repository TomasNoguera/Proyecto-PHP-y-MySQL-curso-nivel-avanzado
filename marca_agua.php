<?php
$imagen_marca = "imagenes/imagen_marca.jpg";
$marca_agua = "imagenes/marca.png";

$imagen = imagecreatefrompng($marca_agua);
$extraccion = substr($imagen_marca, -3);
$extraccion = strtolower($extraccion);

switch ($extraccion) {
    case 'gif':
        $imagen2 = imagecreatefromgif($imagen_marca);
        break;
    
    case 'jpg':
        $imagen2 = imagecreatefromjpeg($imagen_marca);
        break;

    case 'png':
        $imagen2 = imagecreatefrompng($imagen_marca);
        break;
}

imagecopy($imagen2, $imagen, (imagesx($imagen2)/3), (imagesy($imagen2)/3), (imagesx($imagen)/500), (imagesy($imagen)/500), imagesx($imagen), imagesy($imagen));
header("Content-type: imagen_marca/jpeg");
imagejpeg($imagen2);
imagedestroy($imagen);
imagedestroy($imagen2);
?>