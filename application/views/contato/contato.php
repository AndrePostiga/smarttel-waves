<section id="banner">
	<div class="container">		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<h1 style="color: #fff;"><strong>Contato Smart<span style="color:#DD5724;">tel</span></strong></h1>		
			</div>

			<div class="lista col-xs-12 col-sm-12 col-md-4 col-lg-4">				
				<div class="text-rigth text-center">
					<ol class="breadcrumb">
					  <li><a href="<?= base_url('index.php/home')?>">Home</a></li>
					  <li><a href="<?= base_url('index.php/sobre')?>">Quem Somos</a></li>
					  <li><a href="<?= base_url('index.php/contato')?>">Contato</a></li>	
					</ol>
				</div>
			</div>
			
		</div>  
		  
		
	</div>
</section>

	<section id="formularioDeContato">
		<div class="container">
	        <p class="alert-success">
	            <?= $this->session->flashdata("success") ?>
	        </p>
	        <p class="alert-danger">
	            <?= $this->session->flashdata("danger") ?>
	        </p>

			
			<!--Row-->	
			<div class="row">
			<!--Info-->
			<div class="block-info">
				<div class="col-md-4 col-xs-5 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
					<div id="block" class="info">						
					<i class="fa fa-map-o" aria-hidden="true"></i>						
					<h2>Visite</h2> <br>
					<p>
                    Rua Passo da Pátria, 156 – Bloco D   
                    <br> Sala 360 A – São Domingos, 24210-253 
                    <br> Niterói, Brasil
                	</p>
                	<br>
					</div>
				</div>					
				
				<div class="col-md-4 col-xs-3 col-sm-4 wow fadeIn" data-wow-delay="0.6s">
					<div id="block" class="info">						
					<i class="fa fa-phone animated tada infinite" aria-hidden="true"></i>	
					<br>								
					<h2>Ligue</h2>
					<br>
					<p>					
                    Escritório <br>+55 21 2629-5531
                    <br>                   
                	</p>
					</div>
				</div>				
				
				<div class="col-md-4 col-xs-4 col-sm-4 wow fadeIn" data-wow-delay="0.9s">
					<div id="block" class="info">							
					<i class="fa fa-envelope-o" aria-hidden="true"></i>							
					<h2>Email</h2>
					<p>
                    Email:
                    <a href="#">contato@smartteljr.com.br</a>
                    <br> Facebook : 
                    <a href="https://www.facebook.com/smartteljr/" target="_blank">/smartteljr/</a>
					<br> LinkedIn :
                    <a href="https://www.linkedin.com/in/smarttel-jr-consultoria-e-projetos-em-telecom-756587133/" target="_blank">smarttel jr</a>
               		</p>
					</div>
				</div>
			</div>
			<!--End info-->
			</div>
			<!--End row-->			
		</div>
	</section>

	<section id="CoverMapa" class="container hidden-xs hidden-sm">
		<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.2388456315934!2d-43.13330378453879!3d-22.90455958501299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x99817e77d85179%3A0xfceaad5f4cdb780a!2sSmartTel+Jr.+Consultoria+em+Telecom!5e0!3m2!1spt-BR!2sbr!4v1490054065571" frameborder="0" style="border:0" allowfullscreen></iframe>   
    </section>

	
	<section id="form">
		<div class="container">
			<?php echo form_open("contato/enviar"); ?>
			<div class="row contact-form form-group">				
			<h2 class="heading">Envie um email</h2>
			
			<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="0.3s">				
				<label>Campos com * são obrigatórios</label>
				<br>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn controls" data-wow-delay="0.3s">				
				<input name="nome" type="text" class="floatLabel" id="nome" value="<?=set_value('nome')?>">
				<label for="nome">Nome*</label>				
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn controls" data-wow-delay="0.3s">
				<input name="email" type="email" class="floatLabel" id="email" value="<?=set_value('email')?>">
				<label for="email">Email*</label>
			</div>	
			<div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn controls" data-wow-delay="0.3s">
				<input name="telefone" type="text" class="floatLabel" id="telefone" value="<?=set_value('telefone')?>">	
				<label for="telefone">Telefone*</label>							
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn controls" data-wow-delay="0.3s">
				<input name="assunto" type="text" class="floatLabel" id="assunto" value="<?=set_value('assunto')?>">
				<label for="assunto">Assunto</label>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn controls" data-wow-delay="0.3s">
				<select id="estado" name="estado"><?=set_value('estado')?></select>		
							    
			</div>	
			<div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn controls" data-wow-delay="0.3s">	
				<select id="cidade" name="cidade"><?=set_value('cidade')?></select>
				
			</div>	
			<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn controls" data-wow-delay="0.9s" >
				<textarea name="mensagem" rows="5" class="floatLabel" id="mensagem"><?=set_value('mensagem')?></textarea>
				<label for="mensagem">Mensagem</label>
			</div>		
			<div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn controls" data-wow-delay="0.2s" >
				<div class="g-recaptcha" data-sitekey="6LekpBsUAAAAAHjrsJAsOAjtUZ48VB2gf51_RG2p"></div>				
			</div>			

		        <div id="botao" class="col-md-6 text-right">
		        <?php
		        echo form_button(array(
		            "class" => "btn",
		            "content" => "Enviar",
		            "type" => "submit",
		        ));
		        ?>
		        </div>
		        
		        <div class="col-md-12">
		        <br>
		      	<?php echo form_error('g-recaptcha-response');?>
			<?php echo form_error("nome");?>
			<?php echo form_error("email");?>
			<?php echo form_error("telefone");?>
			<?php echo form_error("conheceu");?>
			<?php echo form_error("estado");?>	
			<?php echo form_error("cidade");?>	
			<?php echo form_error("mensagem");?>	
		      	</div>
		      	
		        <?php echo form_close();?>      	
		      	
		      	
			</div><!--Row-->
		</div>
	</section>

	

		

    <script src="<?=base_url('assets/js/jquery.maskedinput.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/js/mascara.js')?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/cidades-estados.js')?>"></script> 


	<script type="text/javascript">		
		(function($){
			function floatLabel(inputType){
				$(inputType).each(function(){
					var $this = $(this);

					//window.setInterval(function() {
					if(($this.val() != "")){
					        $this.next().addClass("active");
					        $('html, body').animate({
					             scrollTop: $("#form").offset().top
					        }, 500);
					}//}, 1000);
					// on focus add cladd active to label
					$this.focus(function(){
					   $this.next().addClass("active");
					});
					//on blur check field and remove class if needed
					$this.blur(function(){
						if($this.val() === '' || $this.val() === 'blank'){
							$this.next().removeClass();
						}
					});
				});
			}
			// just add a class of "floatLabel to the input field!"
			floatLabel(".floatLabel");
		})(jQuery);


		window.onload = function() {

		  new dgCidadesEstados({
		    estado: document.getElementById('estado'),
		    cidade: document.getElementById('cidade'),
		     estadoVal: '<%=Request("estado") %>',
		     cidadeVal: '<%=Request("cidade") %>'
		  });
		}

		$('#navHome').removeClass('active');
        $('#navContact').toggleClass('active')


	</script>

 
    