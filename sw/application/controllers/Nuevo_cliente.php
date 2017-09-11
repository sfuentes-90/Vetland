<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nuevo_cliente extends CI_Controller {

 function __construct()
 {
   parent::__construct();
        $this->load->helper('form');
		$this->load->model('cliente_model');		
 }

    function index() {
		if($this->session->userdata('logged_in')){
			$titulo['titulo'] = 'Nuevo Cliente';
			$this->load->view('header', $titulo);
			$this->load->view('nuevo_cliente_view');
		}
		else{
			redirect('login');
		}
    }    
   
	function agregar(){
		# obtenemos los datos del formulario
		$rut = $this->input->post('rut');
		
		$data = array(
			'rutCliente' => $this->input->post('rut'),
			'nombreCliente' => $this->input->post('nombre'),
			'apellidoCliente' => $this->input->post('apellido'),
			'direccion' => $this->input->post('direccion'),
			'telefono' => $this->input->post('telefono'),
			'email' => $this->input->post('email'),
			'estado' => 1,
			'creado' => $this->session->userdata('username'),
			'fechaCreacion' =>  date('Y-m-d H:i:s', time())
		);
		
		
		$q = $this->cliente_model->buscar_cliente($rut);
		
		if($q){
			redirect('nuevo_cliente');
		}
		else{
			# se agrega el cliente en la BD
			$this->cliente_model->agregar_cliente($data);

			# pasamos el rut a la siguiente pagina
			$url = 'nuevo_paciente/mascota/'.$rut;
			
			# redirigimos a la siguiente pagina
			redirect($url);
		}
	}
}