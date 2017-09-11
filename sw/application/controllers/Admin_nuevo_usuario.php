<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_nuevo_usuario extends CI_Controller {

 function __construct()
 {
   parent::__construct();
		$this->load->model('usuarios_model');		
 }

    function index() {
		if($this->session->userdata('logged_in') && $this->session->userdata('admin') == 1){
			$titulo['titulo'] = 'Nuevo Usuario';
			$this->load->view('admin_header', $titulo);
			$this->load->view('admin_nuevo_usuario_view');
		}
		else{
			redirect('login');
		}
    }    
   
	function agregar(){		
		$rut = $this->input->post('rut');
		
		$data = array(
			'rut' => $rut,
			'nombre' => $this->input->post('nombre'),
			'apellido' => $this->input->post('apellido'),
			'contrasena' => $this->input->post('pass'),
			'estado' => 1,
			'administrador' => 0,
			'creado' => $this->session->userdata('username'),
			'fechaCreado' =>  date('Y-m-d H:i:s', time())
		);
		
		
		$q = $this->usuarios_model->buscar_usuario($rut);
		
		if($q){
			redirect('admin_nuevo_usuario');
		}
		else{
			# se agrega el cliente en la BD
			$this->usuarios_model->agregar_usuario($data);
			
			# redirigimos a la siguiente pagina
			redirect('admin_listar_usuarios');
		}
	}
}