<?php
class Modelo_Guardar_Menu extends CI_Model{

    public function Guardar_Postre($datos){
        $data = array(
            "P_nombre" => $datos["nombre"],
            "P_precio" => $datos["precio"],
            "P_descripcion" => $datos["descripcion"],
        );
        $this->db->insert("postres", $data);
    }

    public function Guardar_Comida($datos){
        $data = array(
            "C_nombre" => $datos["nombre"],
            "C_precio" => $datos["precio"],
            "C_descripcion" => $datos["descripcion"],
        );
        $this->db->insert("comidas", $data);
    }

    public function Guardar_Bebida($datos){
        $data = array(
            "B_nombre" => $datos["nombre"],
            "B_marca" => $datos["marca"],
            "B_precio" => $datos["precio"],
            "B_descripcion" => $datos["descripcion"],
        );
        $this->db->insert("bebidas", $data);
    }

    public function Guardar_Inicio($datos){
        $data = array(
            "I_titulo" => $datos["titulo"],
            "I_subtitulo" => $datos["subtitulo"],
            "I_parrafo" => $datos["parrafo"],
            // "I_imagen" => $datos["imagen"],
        );
        $this->db->insert("inicio", $data);
    }




}

?>