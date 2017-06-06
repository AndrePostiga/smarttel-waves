<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Capacitacao extends CI_Controller{
    public function main(){   	
    	$this->load->library('form_validation');
    	$this->load->helper('form'); 
    	$this->load->model('Portfolio_model');

    	$portfolio = $this->Portfolio_model->busca_porID('capacitacao');


        $dados = array('titulo'=> 'Capacitação - SmartTel Jr. Consultoria e Projetos em Telecomunicações - Serviços',    'portfolios' => $portfolio);
    	$this->load->template("servicos/capacitacao.php", $dados);
	}

}
