<?php if( !defined('BASEPATH')) EXIT('No direct script access allowed');

class Cliente_model extends CI_Model{
    public $variable;
    
    public function __construct() {
        parent::__construct();
    }
    
	# agrega un cliente a la BD
    public function agregar_cliente($data){
        $this->db->insert('clientes', $data);
    }
    
	# devuelve todos los clientes de la BD
	public function listar_clientes(){
		$this->db->where('estado', 1);
		$query = $this->db->get('clientes');
				
		return ($query->result());
	}
	
	# busca un cliente de la base de datos con su rut
	public function buscar_cliente($rut){
		$this->db->where('rutCliente', $rut);
		$this->db->where('estado', 1);
		$query = $this->db->get('clientes');
			
		return ($query->result());
	}
	
	# actualiza un cliente de la BD
	public function actualizar_cliente($rut, $data){
		$this->db->where('rutCliente', $rut);
		$this->db->update('clientes', $data);	
	}
	
	public function eliminar($rut){
		$this->db->where('rutCliente', $rut);
		$this->db->delete('clientes');
	}
}