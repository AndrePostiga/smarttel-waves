<?php
class Portfolio_model extends CI_Model{	
	public function busca_porID($nome){	
		switch ($nome) {
		case 'consultoria':
			$id = '1';
			break;

		case 'telefonia':
			$id = '2';
			break;

		case 'cftv':
			$id = '3';
			break;

		case 'fibra':
			$id = '4';
			break;

		case 'redes':
			$id = '5';
			break;

		case 'capacitacao':
			$id = '6';
			break;		
		
		}	
		return $this->db->get_where('portfolio', array('servico_id' => $id))->result_array();		
	}
}