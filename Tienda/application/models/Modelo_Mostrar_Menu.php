<?php
class Modelo_Mostrar_Menu extends CI_Model{

    public function Mostrar_Postres(){
        $this->db->select("*");
        $this->db->from("postres");
        $consulta = $this->db->get();
        return $consulta->result_array();
}

public function Mostrar_Comidas(){
    $this->db->select("*");
    $this->db->from("comidas");
    $consulta = $this->db->get();
    return $consulta->result_array();
}

public function Mostrar_Bebidas(){
    $this->db->select("*");
    $this->db->from("bebidas");
    $consulta = $this->db->get();
    return $consulta->result_array();
}
}
?>