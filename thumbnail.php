<?php 
$src_img = imagecreatefromjpeg("imagenes/unidad4.jpg");
$alto = imagesy($src_img)/3.4;
$ancho = imagesx($src_img)/3.4;
$dst_img = imagecreatetruecolor($ancho, $alto);
$imagen = imagecreate($ancho, $alto);
imagecopyresized($dst_img, $src_img, 0, 0, 0, 0, $ancho,$alto,imagesx($src_img), imagesy($src_img));
header("Content-type: image/jpeg");
imagejpeg($dst_img);
imagedestroy($dst_img);
?>