<?php
class Carrito {
    private $bd;
    function __construct($base){
        $this->bd = $base;
    }

    public function introducir_compra($id){
        $respuesta = $this->bd->ejecutarConsultas("SELECT * FROM compras WHERE id_compra=$id");
        return $respuesta;
    }

    public function eliminar_compra($id){
        $respuesta = $this->bd->ejecutarConsultas("DELETE FROM compras WHERE id_compra=$id");
        return $respuesta;
    }

    public function listar_compra($id, $codigo, $producto, $descripcion, $precio){
        $respuesta = $this->bd->ejecutarConsultas("UPDATE productos SET codigo='$codigo', producto='$producto', descripcion='$descripcion', precio='$precio' WHERE id_compra=$id");
        return $respuesta;
    }

}

?>
