<?php
class Membros_model extends CI_Model{	
	public function buscaTodos($tabela){		
		$this->db->order_by('nome', 'ASC');
		return $this->db->get($tabela)->result_array();		
	}
}