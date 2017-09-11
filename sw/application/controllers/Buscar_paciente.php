<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buscar_paciente extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('paciente_model');
 }

    function index() {
		if($this->session->userdata('logged_in')){
			$titulo['titulo'] = 'Buscar Paciente';
			$this->load->view('header', $titulo);
			$this->load->view('buscar_paciente_view');
		}
		else{
			redirect('login');
		}
    }

	function buscar(){
		$id = intval($this->input->post('id'));
		$data = $this->paciente_model->buscar_paciente($id);
		
		if($data){
			$url = 'historial_consultas/paciente/'.$id;
			redirect($url);
		}
		else{
			redirect ('buscar_paciente');
		}	
	}   
}