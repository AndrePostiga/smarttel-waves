<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function index(){    	
    	$this->load->model('home_model');    	
    	$parceiros = $this->home_model->buscaTodos('parceiros');
        $dados = array('parceiros' => $parceiros, 'titulo'=> 'SmartTel Jr. Consultoria e Projetos em Telecomunicações - Home - Projetos - Consultoria');
    	$this->load->template("home/home.php", $dados);

	}
}