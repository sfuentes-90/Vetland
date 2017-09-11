<?php if( !defined('BASEPATH')) EXIT('No direct script access allowed');

class Paciente_model extends CI_Model{
    public $variable;
    
    public function __construct() {
        parent::__construct();
    }
    
	# Agrega un paciente a la tabla pacientes y devuelve el ID del paciente generado por la BD
    public function agregar_paciente($data){
        $this->db->insert('pacientes', $data);
		$insert_id = $this->db->insert_id();

		return  $insert_id;
    }
    
	# lista todos los pacientes pertenecientes a una persona (identificada por su rut)
	public function listar_pacientes($rut){
        $this->db->where('rutDueno', $rut);
		$query = $this->db->get('pacientes');

		return ($query->result());
    }
	
	# busca un paciente identificado por su id
	public function buscar_paciente($id){
        $this->db->where('id', $id);
		$query = $this->db->get('pacientes');

		return ($query->result());
    }
	
	# actualiza un paciente 
	public function actualizar_paciente($id, $data){
        $this->db->where('id', $id);
		$this->db->update('pacientes', $data);
    }
	
		
	public function eliminar($id){
		$this->db->where('id', $id);
		$this->db->delete('pacientes'); 
	}
}