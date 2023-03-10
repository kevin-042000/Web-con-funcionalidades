<?php
class usuarios extends CI_Model{

    public function Registrar_usuarios ($datos){
        $data = array(
            "Nombre" => $datos["Nombre"],
            "Apellido" => $datos["Apellido"],
            "Email" => $datos["Email"],
            "Password" => $datos["Password"],
            "R_password" => $datos["Repetir_Password"],
            "Telefono" => $datos["Telefono"],
        );
        $this->db->insert("usuario", $data);
    }



}

?>