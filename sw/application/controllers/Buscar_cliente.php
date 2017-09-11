<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buscar_cliente extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('cliente_model');
 }

    function index() {
		if($this->session->userdata('logged_in')){
			$titulo['titulo'] = 'Buscar Cliente';
			$this->load->view('header', $titulo);
			$this->load->view('buscar_cliente_view');
		}
		else{
			redirect('login');
		}
    }

	function buscar_rut(){
		$rut = $this->input->post('rut');
		$data = $this->cliente_model->buscar_cliente($rut);
		
		if($data){
			$url = 'info_cliente/cliente/'.$rut;
			redirect($url);
		}
		else{
			redirect ('buscar_cliente');
		}	
	}
}