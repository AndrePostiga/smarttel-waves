<?php
class processoSeletivo_model extends CI_Model{	
	public function buscaTodos($tabela){		
		return $this->db->get($tabela)->result_array();		
	}

	public function cadastrar($contato){
		$this->db->insert("seletivo", $contato);
	}

	public function verifica($contato){
		$this->db->where('email',$contato);
		return $this->db->get('seletivo')->row_array();
	}
}