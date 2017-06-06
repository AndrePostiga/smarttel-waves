<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Membros extends CI_Controller{
    public function main(){    	
    	$this->load->model('membros_model');
    	$membros = $this->membros_model->buscaTodos('membros');
        $dados = array('membros' => $membros, 'titulo'=> 'Membros - SmartTel Jr. Consultoria e Projetos em Telecomunicações-
 Equipe');
    	$this->load->template("membros/membros.php", $dados);
	}
}