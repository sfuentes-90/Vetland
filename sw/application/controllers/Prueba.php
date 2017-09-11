<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prueba extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

    function index() {
        echo date_default_timezone_get();
    }   
}