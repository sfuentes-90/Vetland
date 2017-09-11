<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

    function index() {
		if($this->session->userdata('logged_in')  && $this->session->userdata('admin') == 1 ){
			$titulo['titulo'] = 'Home';
			$this->load->view('admin_header', $titulo);
			$user = $this->session->userdata('nombre');
			$this->load->view('admin_home_view', $user);

		}
		else{
			redirect('login');
		}
		
		

		
    }
    
    function nuevo_cliente(){
        redirect(base_url('/nuevo_cliente/index'));
    }
    
   
}