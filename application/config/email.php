<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


$config['protocol'] = 'smtp'; // define o protocolo utilizado
$config['smtp_host'] = 'br802.hostgator.com.br';
$config["smtp_user"] = "contato@smartteljr.com.br";
$config["smtp_pass"] = "123abc321";
$config['_smtp_auth']   = TRUE;
$config["charset"] = "utf-8";
$config["newline"] = "\r\n";
$config["smtp_port"] = '26';
$config['wordwrap'] = TRUE; // define se haverá quebra de palavra no texto
$config['validate'] = TRUE; // define se haverá validação dos endereços de email
$config['mailtype'] = 'text';