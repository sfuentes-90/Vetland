<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

    function index() {
		if($this->session->userdata('logged_in')){
		$titulo['titulo'] = 'Home';
		$this->load->view('header', $titulo);
		$user = $this->session->userdata('nombre');
        $this->load->view('home_view', $user);

		}
		else{
			redirect('login');
		}	
    }
    
    function nuevo_cliente(){
        redirect(base_url('/nuevo_cliente/index'));
    }
    
   
}