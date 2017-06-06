<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller{
    public function main(){   	
    	$this->load->library('form_validation');
    	$this->load->helper('form');  	
        $dados = array('titulo'=> 'Contato - SmartTel Jr. Consultoria e Projetos em Telecomunicações - Fale Conosco - Call Us');
    	$this->load->template("contato/contato.php", $dados);
	}

	public function enviar(){
		$this->load->library('form_validation');		

		$this->form_validation->set_rules("nome", "nome", "trim|required");
		$this->form_validation->set_rules("email", "email", "trim|valid_email|required");
		$this->form_validation->set_rules("telefone", "telefone", "trim|required");
		$this->form_validation->set_rules('g-recaptcha-response','Captcha','callback_recaptcha');
		$this->form_validation->set_rules("conheceu", "conheceu", "trim");
		$this->form_validation->set_rules("mensagem", "mensagem", "trim");
		
		$sucesso = $this->form_validation->run();
		$this->form_validation->set_error_delimiters("<p class='alert-danger'>","</p>");
		
		if($sucesso){
			$contato = array(				
				"nome" => strtoupper($this->input->post("nome")),
				"email" => $this->input->post("email"),	
				"telefone" => $this->input->post("telefone"),			
				"assunto" => $this->input->post("assunto"),
				"estado" => $this->input->post("estado"),
				"cidade" => $this->input->post("cidade"),
				"mensagem" => $this->input->post("mensagem")
			);
			$this->load->library('email');

	        $config['protocol'] = 'smtp'; // define o protocolo utilizado
	        $config['smtp_host'] = 'br802.hostgator.com.br';
	        $config["smtp_user"] = "contato@smartteljr.com.br";
	        $config["smtp_pass"] = "123456";
	        $config['_smtp_auth']   = TRUE;
	        $config["charset"] = "utf-8";
	        $config["newline"] = "\r\n";
	        $config["smtp_port"] = '26';
       	 	$config['wordwrap'] = TRUE; // define se haverá quebra de palavra no texto
       		$config['validate'] = TRUE; // define se haverá validação dos endereços de email
       		$config['mailtype'] = 'text';
       		// Inicializa a library Email, passando os parâmetros de configuração
        	$this->email->initialize($config);

			//fazer logida do email
			$this->email->from($config['smtp_user'], $contato['nome']); //(emailDoRemetente, NomeDoRemetente)
			$this->email->to('contato@smartteljr.com.br'); //(emailDoDestinatario)

			$this->email->subject('Contato Cliente SmartTel Jr.'); //Assunto
			$this->email->message('Nome: '.$contato['nome'].PHP_EOL.'Email: '.$contato['email'].PHP_EOL.'Telefone: '.$contato['telefone'].PHP_EOL.'Assunto: '.$contato['assunto'].PHP_EOL.'Estado: '.$contato['estado'].PHP_EOL.'Cidade: '.$contato['cidade'].PHP_EOL.PHP_EOL.'Mensagem: '.PHP_EOL.$contato['mensagem']); //mensagem

			if($this->email->send())
	        {
	            $this->session->set_flashdata('success','Recebemos o seu email! Aguarde, logo entraremos em contato');
	            $this->main();
	        }
	        else
	        {
	            $this->session->set_flashdata('danger',$this->email->print_debugger());
	            $this->main();
	        }	    	
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