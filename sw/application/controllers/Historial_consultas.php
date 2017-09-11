<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Historial_consultas extends CI_Controller {

	function __construct() {
	   parent::__construct();
	   $this->load->model('consulta_model');
	   $this->load->model('paciente_model');
	}

    function paciente($id) {
		if($this->session->userdata('logged_in')){
			$titulo['titulo'] = 'Historial Consultas';
			$this->load->view('header', $titulo);
			# se obtiene el historial de un paciente
			$data['consultas'] = $this->consulta_model->historial_paciente($id);
			$data['paciente'] = $this->paciente_model->buscar_paciente($id);
			# 
			$this->load->view('historial_consultas_view', $data);
		}
		else{
			redirect('login');
		}
    }       
}