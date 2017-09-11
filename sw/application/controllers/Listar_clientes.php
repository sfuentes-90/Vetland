<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listar_clientes extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('cliente_model');
 }

    function index() {
		if($this->session->userdata('logged_in')){
			$titulo['titulo'] = 'Listar Clientes';
			$this->load->view('header', $titulo);
			$data['clientes'] = $this->cliente_model->listar_clientes();
			$this->load->view('listar_clientes_view', $data);
		}
		else{
			redirect('login');
		}
    }    
   
}