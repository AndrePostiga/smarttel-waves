<?php
class Contato_model extends CI_Model{	
	public function buscaTodos($tabela){		
		return $this->db->get($tabela)->result_array();		
	}
}