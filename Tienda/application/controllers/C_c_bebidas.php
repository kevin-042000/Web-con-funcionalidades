<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_c_bebidas extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->model("Modelo_Mostrar_Menu");
		$bebidas = $this->Modelo_Mostrar_Menu->Mostrar_Bebidas();
		$this->load->view('cargar_bebidas', array("lista"=>$bebidas));
		
	}

	
	public function save()
	{
		$this->load->model("Modelo_Guardar_Menu");
		$this->Modelo_Guardar_Menu->Guardar_bebida($this->input->post());
		header('Location: https://veracious-plating.000webhostapp.com/index.php/C_c_bebidas');
		

	}

	public function eliminar($id)
	{
		$this->load->model("Modelo_eliminar");
		$this->Modelo_eliminar->eliminar_bebida($id);
		redirect('https://veracious-plating.000webhostapp.com/index.php/C_c_bebidas ');	
		

	}
}