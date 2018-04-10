<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Persona extends CI_Model
  {
  	
	public function getRows($id="")
	{
		if (!empty($id)) {
			    $query = $this->db->get_where('personas',array('id'=>$id));
			    return $query->row_array();
		} else 
		{
		    	$query = $this->db->get("personas");
				return $query->result_array();
		} 
	}
	
	public function insertar_nuevas_personas($persona)
	{
		
		$resultado = $this->db->insert('personas',$persona);
		return "$resultado";
	}
	
	public function actualizar_dato($id_usuario,$dato_a_actulizar)
	{
	   
	   $this->db->where('Id',$id_usuario);
	   $this->db->update('personas',$dato_a_actulizar);
	}
	
	public function model_borrar($numero_telefonico)
	{
	      $this->db->delete('personas',array('Id'=>$numero_telefonico));
	}
	
  }
  
  
?>