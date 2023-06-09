<?php 
       if ($_POST) {       	
       	$datos_usuario='<p> Nombre y Apellido: '.$_POST['datos_usuario'].'</p>';
       	
		$correo='<p> Correo: '.$_POST['correo'].'</p>';
       	
		$comentario='<p> Comentario: '.$_POST['comentario'].'</p>';
			$fecha_a = '<p> fecha de publicacion: '.date('d-m-Y', time()).'</p>';
         
			$archivo=fopen('comentarios.txt', 'a+');
        fwrite($archivo, $datos_usuario);
        fwrite($archivo, $correo);
        fwrite($archivo, $comentario);
        fwrite($archivo,$fecha_a);
         fclose($archivo);

       }


 ?>