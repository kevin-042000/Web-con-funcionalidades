
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_c_inicio extends CI_Controller {

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
		$inicio = $this->Modelo_Mostrar_Menu->Mostrar_Noticia();
		$this->load->view('cargar_inicio', array("noticias"=>$inicio));
	}

	public function save()
	{
		$this->load->model("Modelo_Guardar_Menu");
		$this->Modelo_Guardar_Menu->Guardar_Inicio($this->input->post());

		header('Location: https://localhost/Primera_web/Primera-Web/Tienda/index.php/C_c_inicio ');

	

		

	}
}