<?php if( !defined('BASEPATH')) EXIT('No direct script access allowed');

class Raza_model extends CI_Model{    
    public function __construct() {
        parent::__construct();
    }
    
	# busca todos las especies caninas de la BD
    public function listar($tipo){
		$this->db->where('tipo', $tipo);
        $query = $this->db->get('razas');
		
		return $query->result();
    }
	
	public function listar_todos(){
        $query = $this->db->get('razas');
		
		return $query->result();
    }
	
	public function buscar($id){
		$this->db->where('idRaza', $id);
		$query = $this->db->get('razas');
		
		return $query->result();
	}
	
	public function agregar($data){
		$this->db->insert('razas',$data);
	}
	
	public function actualizar($id,$data){
		$this->db->where('idRaza', $id);
		$this->db->update('razas', $data);
	}
	
	public function del($id){
		$this->db->where('idRaza', $id);
		$this->db->delete('razas'); 
	}
}