<?php 
class Usuarios {
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;

    function __construct($nom, $apell, $edad) {
        $this->nombre = $nom;
        $this->apellido = $apell;
        $this->fecha_nacimiento = $edad;
    }

    private function calcular_edad(){
        date_default_timezone_set("America/Argentina/Buenos_Aires");
    
        $hoy = date("Y-m-d");
        $resta = strtotime($hoy)-strtotime($this->fecha_nacimiento);
        $edad = intval($resta/31536000);

        return $edad;
    }

    public function imprime_caracteristicas() {
        echo "<p>Nombre: ".$this->nombre."</p>";
        echo "<p>Apellido: ".$this->apellido."</p>";
        echo "<p>Fecha de Nacimiento: ".$this->fecha_nacimiento."</p>";

        $edad_usuario = $this->calcular_edad();
        echo("<p> Edad: ".$edad_usuario." años.</p>");

    }
}

?>