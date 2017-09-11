<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info_razas extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('raza_model');
	}

    function index() {
		if($this->session->userdata('logged_in')){
			# Se carga el header
			$titulo['titulo'] = 'Información Paciente';
			$this->load->view('header', $titulo);
			
			# Se obtienen los datos
			$data['razas'] = $this->raza_model->listar_todos();
			
			# Se carga la pagina
			$this->load->view('listar_razas_view', $data);
		}
		else{
			redirect('login');
		}
    }   

    function agregar() {
		if($this->session->userdata('logged_in')){
			# Se carga el header
			$titulo['titulo'] = 'Agregar Raza';
			$this->load->view('header', $titulo);
			
			# Se obtienen los datos
			
			# Se carga la pagina
			$this->load->view('agregar_raza_view');
		}
		else{
			redirect('login');
		}
    } 
	
	
	function editar($id) {
		if($this->session->userdata('logged_in')){
			# Se carga el header
			$titulo['titulo'] = 'Agregar Raza';
			$this->load->view('header', $titulo);
			
			# Se obtienen los datos
			$data['id'] = $id;
			$data['info'] = $this->raza_model->buscar($id);
			
			# Se carga la pagina
			$this->load->view('editar_raza_view', $data);
		}
		else{
			redirect('login');
		}
    } 

	function agregar_raza(){
		$data = array(
			'raza' => $this->input->post('nombre'),
			'tipo' => $this->input->post('tipo')
		);
		
		$this->raza_model->agregar($data);
		redirect('info_razas');
	}
	
	function actualizar_raza($id){
		#$id = $this->input->post('id');
		$data = array(
			'raza' => $this->input->post('nombre'),
			'tipo' => $this->input->post('tipo')
		);
		
		$this->raza_model->actualizar($id, $data);
		#echo $id;
		redirect('info_razas');
	}
	
	function eliminar($id){
		$this->raza_model->del($id);
		redirect('info_razas');
	}
}