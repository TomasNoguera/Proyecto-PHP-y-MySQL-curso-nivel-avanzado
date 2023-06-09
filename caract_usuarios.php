<?php
include("clases/usuarios.php");
$caracteristicas = new Usuarios('Juan','Perez','1991-11-15');
$caracteristicas->imprime_caracteristicas();
?>