<!DOCTYPE html>
<html lang="pt-br">
<head>

  <!--Titulo e Icones e Palavras Chave-->
  <title><?=$titulo?></title>
  <link rel="shortcut icon" type="image/png" href="<?=base_url('assets/img/favicon3.png')?>"/>
  <link rel="apple-touch-icon" href="<?=base_url('assets/img/favicon3.png')?>">
  <meta name="theme-color" content="#DD5724" />
  <meta name="keywords" content="SmartTel Telecomunicações Telecom UFF Escola de Engenharia">
  <meta name="description" content="A SmartTel Jr. nasceu da vontade de conectar cada vez mais pessoas, tornar a vida melhor através da tecnologia e associar o conhecimento técnico acadêmico ao mercado de trabalho.">
  
  <!--Compatibilidade-->
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <!--Responsivo-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  	
	<!--Teste Chat Zendesk-->
	<!-- Start of andrepostiga Zendesk Widget script -->
	<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=bb216095-4ba7-44bf-8424-303881e85f1d"> </script>
	<!-- End of andrepostiga Zendesk Widget script -->	
  
   <!--MArketing Facebook-->  
  <meta property="og:type" content="website"/>
  <meta property="og:site_name" content="SmartTel Jr. Consultoria em Projetos de Telecom"/>
  <meta name="fb_admins_meta_tag" content="smartteljr">
  <meta property="og:title" content="SmartTel Jr."/>
  <meta property="og:description" content="A SmartTel Jr. nasceu da vontade de conectar cada vez mais pessoas, tornar a vida melhor através da tecnologia e associar o conhecimento técnico acadêmico ao mercado de trabalho."/>   
  <meta property="og:image" content="http://www.smartteljr.com.br/assets/img/icon256.jpg"/>
  <meta property="og:url" content="http://smartteljr.com.br/"/>
  <meta property="og:updated_time" content="1440432930" />  

 
  <!--css -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">

  <link href="<?=base_url('assets/css/meusCss/mycss.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/css/meusCss/css_home.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/css/meusCss/css_sobre.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/css/meusCss/css_contato.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/css/meusCss/css_membros.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/css/meusCss/css_processoSeletivo.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/css/meusCss/servicos/css_carta_servicos.css')?>" rel="stylesheet">

  <!--Animação-->
  <link rel="stylesheet" href="<?=base_url('assets/css/animate.min.css')?>">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
  
  <style>
    .navbar-nav{
       float: right;
       padding-right: 30px;
    }

    .navbar-header{
       float: center;
       padding-left: 30px;
    }
  </style>
  
</head>
<body>
  
  <!--Google Analitics-->
  <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-97067596-1', 'auto');
	  ga('send', 'pageview');

  </script>
  
  <!--Plugin Facebook-->
  <div id="fb-root"></div>
  <script>
  	(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9";
		  fjs.parentNode.insertBefore(js, fjs);
  	}(document, 'script', 'facebook-jssdk'));
  </script>


<header id="navegacao" class="container">

<!--
********************************************************************
* Responsive Transparent Navbar
********************************************************************
-->

        
     <nav class="navbar navbar-default navbar-fixed-top">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1 style="margin: 0;">
                      <a class="navbar-brand center-block" href="<?=base_url('home')?>">
                        <img class="img-responsive hidden-xs hidden-sm" src="<?=base_url('assets/img/logo.png')?>" alt="Smarttel Jr">
                        <img class="img-responsive hidden-md hidden-lg" src="<?=base_url('assets/img/favicon3.png')?>" alt="Smarttel Jr">
                      </a>
                    </h1>
                </div>

                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="collapse">
                    <ul class="nav navbar-nav nav-right">
                      <li id="navHome" class="active"><?= anchor('index.php/home','HOME')?></li>
                      <li id="navAbout"><?= anchor('index.php/sobre','QUEM SOMOS')?></li>                                            
                        <li id="navServ" class="dropdown">
                          <a href="<?=base_url('index.php/servicos')?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVIÇOS <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="<?= base_url('index.php/projetos-e-consultoria')?>">Consultoria</a></li>
                            <li><a href="<?= base_url('index.php/telefonia-ip-e-pabx')?>">Telefonia</a></li>
                            <li><a href="<?= base_url('index.php/cftv-seguranca')?>">CFTV e Segurança</a></li>
                            <li><a href="<?= base_url('index.php/fibra-optica')?>">Fibra Óptica</a></li>
                            <li><a href="<?= base_url('index.php/redes-com-fio-e-wifi')?>">Redes</a></li>
                            <li><a href="<?= base_url('index.php/capacitacao')?>">Capacitação</a></li>
                          </ul>
                        </li>
                      <li id="navProcess"><?= anchor('index.php/processoSeletivo','TRABALHE CONOSCO')?></li>
                      <li id="navMembers"><?= anchor('index.php/membros','MEMBROS')?></li>
                      <li id="navContact"><?= anchor('index.php/contato','CONTATO')?></li>
                    </ul>
                </div><!-- /.navbar-collapse -->                
        </nav>

  </header>


  <div id="Fale-Conosco" style="position:fixed;bottom:1px;right:-30px;margin:0;padding:5px 3px; z-index: 10000;">
      <a href="<?=base_url('index.php/contato/main')?>">
      <div class="circlephone" style="transform-origin: center;"></div>
      <div class="circle-fill" style="transform-origin: center;"></div>
      <div class="img-circle" style="transform-origin: center;"><div class="img-circleblock" style="transform-origin: center;"></div></div>    
      </a>  
  </div>

  <!--Captcha-->
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <!--Jquery   -->
  <script src="<?=base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
  <!--Animação-->  
  <script src="<?=base_url('assets/js/wow.min.js')?>"></script>
  <script>
    new WOW().init();
  </script>

<script type="text/javascript">
  $(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
      $('.navbar').addClass('shrink');
      $('.navbar').addClass('color');
    } else {
      $('.navbar').removeClass('shrink');
      $('.navbar').removeClass('color');
    }
  });
  
</script>
