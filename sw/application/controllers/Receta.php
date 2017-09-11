<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Receta extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

    function index() {
		if($this->session->userdata('logged_in')){
		$user = $this->session->userdata('nombre');
        $this->load->view('receta_view');

		}
		else{
			redirect('login');
		}	
    }
}