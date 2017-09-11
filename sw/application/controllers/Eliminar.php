<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eliminar extends CI_Controller {

 function __construct() {
	parent::__construct();
    $this->load->model('cliente_model');
	$this->load->model('paciente_model');
	$this->load->model('consulta_model');
	$this->load->model('raza_model');
	$this->load->helper('form');
 }
	public function eliminar_consulta($id){
		$this->consulta_model->eliminar($id);
		redirect('home');
	}
 
	public function eliminar_paciente($id){
		$this->paciente_model->eliminar($id);
		redirect('home');
	}
	
	public function eliminar_cliente($rut){
		$this->cliente_model->eliminar($rut);
		redirect('home');
	}
}