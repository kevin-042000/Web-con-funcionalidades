<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_v_postre extends CI_Controller {

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
		$postres = $this->Modelo_Mostrar_Menu->Mostrar_Postres();
		$this->load->view('v_postre', array("lista"=>$postres, "Postre"=>"Titulo"));
		
	}
}