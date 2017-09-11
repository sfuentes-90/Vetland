<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info_paciente extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('paciente_model');
		$this->load->model('cliente_model');
		$this->load->model('raza_model');
	}

    function ver($id) {
		if($this->session->userdata('logged_in')){
			# Se carga el header
			$titulo['titulo'] = 'Información Paciente';
			$this->load->view('header', $titulo);
			
			# Se obtienen los datos
			$data['paciente'] = $this->paciente_model->buscar_paciente($id);	
			$data['cliente'] = $this->cliente_model->buscar_cliente($data['paciente'][0]->rutDueno);
			$data['raza'] = $this->raza_model->buscar($data['paciente'][0]->idRaza);
			
			# Se carga la pagina
			$this->load->view('info_paciente_view', $data);
		}
		else{
			redirect('login');
		}
    }    
}