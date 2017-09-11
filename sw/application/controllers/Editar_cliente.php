<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editar_cliente extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('cliente_model');
 }

    function cliente($rut) {
		if($this->session->userdata('logged_in')){			
			$titulo['titulo'] = 'Editar Cliente';
			$this->load->view('header', $titulo);
			#obtenemos los datos del cliente mediante su rut
			$data['cliente'] = $this->cliente_model->buscar_cliente($rut);
			
			# cargamos la vista con los datos del cliente
			$this->load->view('editar_cliente_view', $data);
		}
		else{
			redirect('login');
		}
    }
   
	function actualizar(){
		# obtenemos los datos del formulario
		$rut = $this->input->post('rut');
		
		$data = array(
			'rutCliente' => $rut,
			'nombreCliente' => $this->input->post('nombre'),
			'apellidoCliente' => $this->input->post('apellido'),
			'direccion' => $this->input->post('direccion'),
			'telefono' => $this->input->post('telefono'),
			'email' => $this->input->post('email'),
			'estado' => 1,
			'modificado' => $this->session->userdata['username'],
			'fechaModificacion' =>  date('Y-m-d H:i:s', time())
		);
		
		# se agrega el cliente en la BD
		$this->cliente_model->actualizar_cliente($rut,$data);

		# pasamos el rut a la siguiente pagina
        $url = 'info_cliente/cliente/'.$rut;
		
		# redirigimos a la siguiente pagina
		redirect($url);
	}
}