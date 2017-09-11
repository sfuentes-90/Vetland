<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
    }

      
    public function index(){
		if($this->session->userdata('logged_in')){
			redirect('home');
		}
		else{	
			# cargamos la vista de login
			$this->load->view('login_view');
			
			# si el campo password del formulario no esta vacio podemos intentar el login
			if(isset($_POST['password'])){    
			$this->load->model('usuarios_model');
			
				$rut = $this->input->post('username');
				$pass = $this->input->post('password');

				$q = $this->usuarios_model->login($rut, $pass);
				
				if( $q ){			
					# obtenemos el resultado de la consulta a la BD			
					$data = array(
						'username'  => $q->row()->rut,
						'name'      => $q->row()->nombre,
						'apellido'  => $q->row()->apellido,
						'admin'		=> $q->row()->administrador,
						'res'		=> $q->row()->res,
						'logged_in' => TRUE
					);	
						
					# lo guardamos en una session de CI
					$this->session->set_userdata($data);
					
					if($q->row()->administrador == 1){
						redirect('admin_home');
					}

					else{
						redirect('home');
					}
				}
				else{
					redirect('login');
				}
			
			}
		}
    }

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
