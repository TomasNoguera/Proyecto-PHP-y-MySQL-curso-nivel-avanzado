<?php
if($_POST){
        $dia= $_POST['dia']; 
        $mes= $_POST['mes'];  
        $ano= $_POST['ano'];
        
        date_default_timezone_set('America/Argentina/Buenos_aires');  
        $fecha_actual = date('d-m-Y', time());
        $fecha_consulta = strtotime($dia.'-'.$mes.'-'.$ano)-strtotime($fecha_actual);
        
        if($fecha_consulta >= $fecha_actual){
            echo '<p> Faltan '.$fecha_consulta / (86400).' días para la fecha seleccionada.</p>';}
            if($fecha_consulta <= $fecha_actual){
                echo '<p>Fecha incorrecta. Ya pasaron '.$fecha_consulta / (-86400).' días desde la fecha seleccionada.</p>';}
        }

?>