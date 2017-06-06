<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ProcessoSeletivo extends CI_Controller{
    public function main(){  
    	$this->load->helper('form');  	
    	$this->load->model('processoSeletivo_model');
        $dados = array('titulo'=> 'Processo Seletivo - SmartTel Jr. Consultoria e Projetos em Telecomunicações - Trabalhe Conosco');
    	$this->load->template("processoSeletivo/processoSeletivo.php", $dados);
	}

	public function cadastrar(){
		$this->load->library('form_validation');		

		$this->form_validation->set_rules("email", "email", "trim|valid_email|required");
		$this->form_validation->set_rules('g-recaptcha-response','Captcha','callback_recaptcha');
		
		$sucesso = $this->form_validation->run();
		$this->form_validation->set_error_delimiters("<p class='alert-danger'>","</p>");
		
		if($sucesso){
			$this->load->model("processoSeletivo_model");
			$contato = array(				
				"email" => $this->input->post("email")	
			);

			$email = $this->processoSeletivo_model->verifica($contato['email']);
			if ($email['email'] == ($this->input->post("email"))) {
				$this->session->set_flashdata("danger", "Seu email já foi cadastrado em nosso banco, aguarde nosse email!");
			}else{
				$this->processoSeletivo_model->cadastrar($contato);
				$this->session->set_flashdata("success", var_dump($this->processoSeletivo_model->verifica($contato['email']))."você foi cadastrado com sucesso, aguarde nosso email!");	    	
			}
			$this->main();		
			
	    }else{
	    	$this->main();
	    }
	}
	
	public function recaptcha($str='')
	{
	  $google_url="https://www.google.com/recaptcha/api/siteverify";
	  $secret='6LekpBsUAAAAAO1I8iOHBH3tzcnZe0_Ms5bw7gK6';
	  $ip=$_SERVER['REMOTE_ADDR'];
	  $url=$google_url."?secret=".$secret."&response=".$str."&remoteip=".$ip;
	  $curl = curl_init();
	  curl_setopt($curl, CURLOPT_URL, $url);
	  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	  curl_setopt($curl, CURLOPT_TIMEOUT, 10);
	  curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
	  $res = curl_exec($curl);
	  curl_close($curl);
	  $res= json_decode($res, true);
	  //reCaptcha success check
	  if($res['success'])
	  {
	    return TRUE;
	  }
	  else
	  {
	    $this->form_validation->set_message('recaptcha', 'Marque a caixa CAPTCHA para confirmar que você não é um robô!');
	    return FALSE;
	  }
	}
}