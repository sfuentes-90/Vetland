<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nueva_consulta extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('paciente_model');
   $this->load->model('cliente_model');
 }

    function index() {
		if($this->session->userdata('logged_in')){
			$titulo['titulo'] = 'Nueva Consulta';
			$this->load->view('header', $titulo);
			$this->load->view('nueva_consulta_view');
		}
		else{
			redirect('login');
		}
    }

	function buscar(){
		$id = intval($this->input->post('id'));
		$rut = $this->input->post('rut');
		$v1 = $this->paciente_model->buscar_paciente($id);
		
		if ( empty ($v1) && empty($v2) ){
			#echo json_encode( $v1 );
			#echo json_encode( $v2);
			redirect('nueva_consulta');
		}
		else{
			$url = 'consulta/nueva_consulta/'.$rut.'/'.$id;
			redirect($url);
		}
	}   
}