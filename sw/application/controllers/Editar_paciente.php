<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editar_paciente extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('paciente_model');
   $this->load->model('raza_model');
 }

    function editar($id) {
		if($this->session->userdata('logged_in')){			
			$titulo['titulo'] = 'Editar Paciente';
			$this->load->view('header', $titulo);
			
			$data['paciente'] = $this->paciente_model->buscar_paciente($id);
			$data['caninos'] = $this->raza_model->listar('C');
			$data['felinos'] = $this->raza_model->listar('F');
			$data['raza'] = $this->raza_model->buscar($data['paciente'][0]->idRaza);
			$data['id'] = $id;
			
			$this->load->view('editar_paciente_view', $data);
		}
		else{
			redirect('login');
		}
    }    
   
	public function actualizar(){
		# obtenemos los datos del formulario
		$id = $this->input->post('id');
		$rut = $this->input->post('rut');
		
		# se crea un array con los datos del formulario
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'especie' => $this->input->post('especie'),
			'raza' => $this->input->post('raza'),
			'sexo' => $this->input->post('sexo'),
			'fechaNacimiento' => date("Y-m-d H:i:s",strtotime(str_replace('/','-',$this->input->post('fecha')))),
			'modificado' => $this->session->userdata('username'),
			'fechaModificacion' =>  date('Y-m-d H:i:s', time())
		);
		
		# se agrega el cliente en la BD
		$id = $this->paciente_model->actualizar_paciente($id, $data);

		
		# pasamos el rut a la siguiente pagina
        $url = 'info_cliente/cliente/'.$rut;
		
        
		# redirigimos a la siguiente ventana
		redirect($url);
	}
}