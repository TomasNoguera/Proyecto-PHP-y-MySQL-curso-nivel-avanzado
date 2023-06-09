<?php
class Productos{
    private $bd;

    function __construct($base){
        $this->bd = $base;
    }

    public function insertarProducto($codigo, $producto, $descripcion, $precio){
        $respuesta = $this->bd->ejecutarConsultas("INSERT INTO compras VALUES(DEFAULT, '$codigo', '$producto', '$descripcion', '$precio')");
        return $respuesta;
    }

    public function seleccionarProductos(){
        $respuesta = $this->bd->ejecutarConsultas("SELECT * FROM compras ORDER BY codigo");
        return $respuesta;
    }
}

?>