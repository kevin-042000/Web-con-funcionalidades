<?php
class Modelo_Guardar_Bebida extends CI_Model{

    public function Guardar_Bebida($datos){
        $data = array(
                    "B_nombre" => $datos["nombre"],
                    "B_marca" => $datos["marca"],
                    "B_precio" => $datos["precio"],
                    "B_descripcion" => $datos["descripcion"],
                );
        $this->db->insert("bebidas", $data);
    }

    




}

?>