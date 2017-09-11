<?php if( !defined('BASEPATH')) EXIT('No direct script access allowed');

class Consulta_model extends CI_Model{
    public function __construct() {
        parent::__construct();
		$this->load->library('session');
    }
    
	# Inserta una consulta con los datos del parametro $data en la tabla consultas
    public function agregar_consulta($data){
		$this->db->insert('consultas', $data);		
	}
	
	# Busca las consultas correspondientes a un paciente especificado por el parametro $id
	public function historial_paciente($id){
		$this->db->where('idPaciente', $id);
		$query = $this->db->get('consultas');
		
		return ($query->result());
	}
	
	public function buscar_consulta($id){
		$this->db->where('idConsulta', $id);
		$query = $this->db->get('consultas');
		
		return ($query->result());
	}
	
	public function buscar_vacunas($id){
		$this->db->where('idPaciente', $id);
		$query = $this->db->get('consultas');
		
		return $query->result();
	}
	
	public function editar_consulta($id, $data){
		$this->db->where('idConsulta', $id);
		$this->db->update('consultas', $data);	
	}
	
	public function eliminar($id){
		$this->db->where('idConsulta', $id);
		$this->db->delete('consultas');	
	}
}