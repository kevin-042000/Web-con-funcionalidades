<?php
class Modelo_eliminar extends CI_Model{

    public function eliminar_comida($id_comida) {
        $this->db->where("ID_comidas",$id_comida);
        $this->db->delete("comidas");
    }

    public function eliminar_bebida($id_bebida) {
        $this->db->where("ID_bebidas",$id_bebida);
        $this->db->delete("bebidas");
        
    }

    public function eliminar_postre($id_postre) {
        $this->db->where("ID_postres",$id_postre);
        $this->db->delete("postres");
        
    }

    public function eliminar_noticia($id_noticia) {
        $this->db->where("ID_inicio",$id_noticia);
        $this->db->delete("inicio");
        
    }

   





}

?>