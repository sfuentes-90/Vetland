<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_listar_clientes extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('cliente_model');
   $this->load->model('usuarios_model');
 }

    function index() {
		if($this->session->userdata('logged_in')  && $this->session->userdata('admin') == 1 ){
			$titulo['titulo'] = 'Listar Clientes';
			$this->load->view('admin_header', $titulo);
			$data['clientes'] = $this->cliente_model->listar_clientes();
			$this->load->view('admin_listar_clientes_view', $data);
		}
		else{
			redirect('login');
		}
    }    
   
}