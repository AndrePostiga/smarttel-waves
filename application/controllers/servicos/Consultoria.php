<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultoria extends CI_Controller{
    public function main(){   	
    	$this->load->library('form_validation');
    	$this->load->helper('form'); 
    	$this->load->model('Portfolio_model');

    	$portfolio = $this->Portfolio_model->busca_porID('consultoria');

        $dados = array('titulo'=> 'Projetos e Consultoria - SmartTel Jr. Consultoria e Projetos em Telecomunicações - Serviços',    'portfolios' => $portfolio);
    	$this->load->template("servicos/consultoria.php", $dados);
	}

}