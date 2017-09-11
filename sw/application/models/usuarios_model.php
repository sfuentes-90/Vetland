<?php if( !defined('BASEPATH')) EXIT('No direct script access allowed');

class Usuarios_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
		$this->load->library('session');
    }
    
    public function login($username, $password){
        # preparamos la consulta buscando una fila con un usuario y contraseña que coincida
        $this->db->where('rut', $username);
        $this->db->where('contrasena', $password);
        
        # realizamos la consulta en la BD
        $query = $this->db->get('usuarios');
        
        # si se recibe 1 fila se realiza el login
        if($query->num_rows() > 0){            
            return $query;
        }
        
        # el usuario no se encontro en la BD
        else{
            return FALSE;
        }     
    }
	
	public function buscar_usuario($rut){
		$this->db->where('rut', $rut);
		$query = $this->db->get('usuarios');
		
		return $query->result();
	}
	
	public function agregar_usuario($data){
		$this->db->insert('usuarios',$data);
	}
	
	public function listar_usuarios(){
		$this->db->where('administrador', 0);
		$query = $this->db->get('usuarios');
				
		return ($query->result());
	}
	
	public function actualizar($rut, $data){
		$this->db->where('rut', $rut);
		$this->db->update('usuarios', $data);
	}
	
	public function eliminar($rut){
		$this->db->where('rut', $rut);
		$this->db->delete('usuarios'); 
	}
}