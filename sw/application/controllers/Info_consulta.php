<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info_consulta extends CI_Controller {

 function __construct() {
	parent::__construct();
    $this->load->model('cliente_model');
	$this->load->model('paciente_model');
	$this->load->model('consulta_model');
	$this->load->model('raza_model');
	$this->load->model('usuarios_model');
	$this->load->helper('form');
 }

    function consulta($id) {
		if($this->session->userdata('logged_in')){			
			$titulo['titulo'] = 'Nueva Consulta';
			$this->load->view('header', $titulo);
			
			$consulta = $this->consulta_model->buscar_consulta($id);
			#$echo ();
			
			$data['cliente'] = $this->cliente_model->buscar_cliente($consulta[0]->rutDueno);
			$data['paciente'] = $this->paciente_model->buscar_paciente($consulta[0]->idPaciente);
			$data['raza'] = $this->raza_model->buscar($data['paciente'][0]->idRaza);
			$data['consulta'] = $consulta;
			$data['usuario'] = $this->usuarios_model->buscar_usuario($consulta[0]->creado);

			# cargamos la vista con los datos del cliente
			$this->load->view('ver_consulta_view', $data);
		}
		else{
			redirect('login');
		}
    }
}