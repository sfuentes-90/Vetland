<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_editar_usuario extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('usuarios_model');
 }

    function cliente($rut) {
		if($this->session->userdata('logged_in')  && $this->session->userdata('admin') == 1 ){			
			$titulo['titulo'] = 'Editar Cliente';
			$this->load->view('admin_header', $titulo);
			#obtenemos los datos del cliente mediante su rut
			$data['usuario'] = $this->usuarios_model->buscar_usuario($rut);
			
			# cargamos la vista con los datos del cliente
			$this->load->view('admin_editar_usuario_view', $data);
		}
		else{
			redirect('login');
		}
    }
   
	function actualizar(){
		# obtenemos los datos del formulario
		$rut = $this->input->post('rut');
		
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'apellido' => $this->input->post('apellido'),
			'contrasena' => $this->input->post('password'),
			'estado' => 1,
			'modificado' => $this->session->userdata['username'],
			'fechaModificado' =>  date('Y-m-d H:i:s', time())
		);
		
		# se agrega el cliente en la BD
		$this->usuarios_model->actualizar($rut,$data);

		#echo json_encode($data);
		
		# redirigimos a la siguiente pagina
		redirect('admin_listar_usuarios');
	}
}