<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobre extends CI_Controller{
    public function main(){    	    	
        $dados = array('titulo'=> 'Sobre - SmartTel Jr. Consultoria e Projetos em Telecomunicações - Quem Somos - About');
    	$this->load->template("sobre/sobre.php", $dados );

	}
}