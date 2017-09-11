<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_listar_usuarios extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('usuarios_model');
 }

    function index() {
		if($this->session->userdata('logged_in') && $this->session->userdata('admin') == 1){
			$titulo['titulo'] = 'Listar Clientes';
			$this->load->view('admin_header', $titulo);
			$data['usuarios'] = $this->usuarios_model->listar_usuarios();
			$data['creado'] = $this->usuarios_model->buscar_usuario($data['usuarios'][0]->rut);
			$data['modificado'] = $this->usuarios_model->buscar_usuario($data['usuarios'][0]->rut);
			$data['eliminado'] = $this->usuarios_model->buscar_usuario($data['usuarios'][0]->rut);
			$this->load->view('admin_listar_usuarios_view', $data);
		}
		else{
			redirect('login');
		}
    }    
   
	function eliminar($rut){
		
		$this->usuarios_model->eliminar($rut);
		redirect('admin_listar_usuarios');
	}
}