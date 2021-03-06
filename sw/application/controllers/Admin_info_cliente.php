<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_info_cliente extends CI_Controller {

 function __construct()
 {
   parent::__construct();
    $this->load->model('cliente_model');
	$this->load->model('paciente_model');
	$this->load->model('usuarios_model');
	$this->load->helper('form');
 }

    function cliente($rut) {
		if($this->session->userdata('logged_in')  && $this->session->userdata('admin') == 1 ){
			$titulo['titulo'] = 'Información Cliente';
			$this->load->view('admin_header', $titulo);
			$data['cliente'] = $this->cliente_model->buscar_cliente($rut);
			$data['pacientes'] = $this->paciente_model->listar_pacientes($rut);
			
			$this->load->view('admin_info_cliente_view', $data);
		}
		else{
			redirect('login');
		}
		
		
		

    }

	function agregar_mascota(){	
		$rut = $this->input->post('rutDueno');
		
		# pasamos el rut a la siguiente pagina
        $url = 'nuevo_paciente/mascota/'.$rut;
		
		# redirigimos a la siguiente pagina
		redirect($url);
	}
   
}