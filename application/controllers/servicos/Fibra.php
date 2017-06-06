<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fibra extends CI_Controller{
    public function main(){   	
    	$this->load->library('form_validation');
    	$this->load->helper('form'); 
    	$this->load->model('Portfolio_model');

    	$portfolio = $this->Portfolio_model->busca_porID('fibra');

        $dados = array('titulo'=> 'Fibra Óptica - SmartTel Jr. Consultoria e Projetos em Telecomunicações - Serviços',    'portfolios' => $portfolio);
    	$this->load->template("servicos/fibra.php", $dados);
	}

}