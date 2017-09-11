<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editar_consulta extends CI_Controller {

 function __construct() {
	parent::__construct();
    $this->load->model('cliente_model');
	$this->load->model('paciente_model');
	$this->load->model('consulta_model');
	$this->load->model('raza_model');
	$this->load->helper('form');
 }

    function consulta($id) {
		if($this->session->userdata('logged_in')){			
			$titulo['titulo'] = 'Nueva Consulta';
			$this->load->view('header', $titulo);
			
			#$consulta = $this->consulta_model->buscar_consulta($id);
			$data['consulta'] = $this->consulta_model->buscar_consulta($id);
			$data['paciente'] = $this->paciente_model->buscar_paciente($data['consulta'][0]->idPaciente);	
			$data['cliente'] = $this->cliente_model->buscar_cliente($data['consulta'][0]->rutDueno);
			$data['raza'] =   $this->raza_model->buscar($data['paciente'][0]->idRaza);
			
			$data['id'] = $id;

			# cargamos la vista con los datos del cliente
			$this->load->view('editar_consulta_view', $data);
		}
		else{
			redirect('login');
		}
    }
	
	function editar(){
		$id = $this->input->post('idConsulta');
		
		$vacunas = str_replace(',', '<br/>',$this->input->post('vacunas'));
		$medicamentos = str_replace(',', '<br/>',$this->input->post('medicamentos'));
		$procedimientos = str_replace(',', '<br/>',$this->input->post('procedimientos'));
		
		
		$data = array(
			'rutDueno' => $this->input->post('rutDueno'),
			'idPaciente' => $this->input->post('idPaciente'),
			'tipoConsulta' => $this->input->post('tipoConsulta'),
			'peso' => $this->input->post('peso'),
			'temperatura' => $this->input->post('temperatura'),
			'estatura' => $this->input->post('estatura'),
			'alimentacion' => $this->input->post('alimentacion'),
			'vacunas' =>  $vacunas,
			'antiparacitarios' => $this->input->post('antiparacitarios'),
			'diagnosticos' => $this->input->post('diagnostico'),
			'medicamentos' => $medicamentos,
			'procedimientos' => $procedimientos,
			'observaciones' => $this->input->post('observaciones'),
			'fechaConsulta' => date("Y-m-d H:i:s"),
			'valorReferencial' => $this->input->post('valorReferencial'),
			'receta' => $this->input->post('receta'),
			'creado' => $this->session->userdata('username'),
			'fechaCreacion' =>  date('Y-m-d H:i:s', time())
		);
		
		$id = $this->consulta_model->editar_consulta($id, $data);
		
		$url = 'info_cliente/cliente/'.$this->input->post('rutDueno');
		redirect($url);
	}
}