<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nuevo_paciente extends CI_Controller {

 function __construct()
 {
   parent::__construct();
        $this->load->helper('form');
		$this->load->model('paciente_model');
		$this->load->model('cliente_model');
		$this->load->model('raza_model');
 }

    function mascota($rut) {
		if($this->session->userdata('logged_in')){
			$titulo['titulo'] = 'Nuevo Paciente';
			$this->load->view('header', $titulo);
			
			$data['rut'] = $rut;
			$data['caninos'] = $this->raza_model->listar('C');
			$data['felinos'] = $this->raza_model->listar('F');
			$data['propietario'] = $this->cliente_model->buscar_cliente($rut);
			
			$this->load->view('nuevo_paciente_view', $data);
		}
		else{
			redirect('login');
		}
    }    
   
	public function agregar(){		
		# obtenemos los datos del formulario
		$rut = $this->input->post('rut');
		
		#echo $this->input->post('raza');
		
		$data = array(
			'rutDueno' => $rut,
			'nombre' => $this->input->post('nombre'),
			'especie' => $this->input->post('especie'),
			'idRaza' => intval($this->input->post('raza')),
			'sexo' => $this->input->post('sexo'),
			'fechaNacimiento' => date("Y-m-d H:i:s",strtotime(str_replace('/','-',$this->input->post('fecha')))),
			'estado' => 1,
			'creado' => $this->session->userdata('username'),
			'fechaCreacion' =>  date('Y-m-d H:i:s', time())
		);
		
		# se agrega el cliente en la BD
		$id = $this->paciente_model->agregar_paciente($data);

		$data = array(
			'rut' => $rut,
			'id' => $id
		);

		# se crea una variable flashdata (cookie) para conservar el rut del cliente en la siguiente ventana
		#$this->session->set_flashdata('datos', $data);
		
		# pasamos el rut a la siguiente pagina
        $url = 'info_cliente/cliente/'.$rut;
		
        
		# redirigimos a la siguiente ventana
		#redirect('nueva_consulta');
		redirect($url);
	}
}