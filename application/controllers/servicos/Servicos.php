<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicos extends CI_Controller{
    public function main(){    
    	$this->load->model('servicos_model');
    	$servicos = $this->servicos_model->buscaTodos('servico');	    	
        $dados = array('titulo'=> 'Serviços - SmartTel Jr. Consultoria e Projetos em Telecomunicações - Carta de Serviços - Services',  'servicos' => $servicos);
    	$this->load->template("servicos/servicos.php", $dados );

	}
}