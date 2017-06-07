<section id="banner">
	<div class="container">		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
				<ul class="list-inline" style="display: inline-flex; margin-left:-15px;">
					<li><img src="<?=base_url('assets/img/servicos/cftv.png')?>" alt="CFTV e Segurança SmartTel"></li>							
					<li><h1><strong>CFTV e Segurança Smart<span style="color:#DD5724;">tel</span></strong></h1></li>
				</ul>	
			</div>

			<div class="lista col-xs-12 col-sm-12 col-md-6 col-lg-4">				
				<div class="text-center">
					<ol class="breadcrumb">
					  <li><a href="<?= base_url('index.php/projetos-e-consultoria')?>">Consultoria</a></li>
					  <li><a href="<?= base_url('index.php/telefonia-ip-e-pabx')?>">Telefonia</a></li>
					  <li class="active">CFTV</li>
					  <li><a href="<?= base_url('index.php/fibra-optica')?>">Fibra</a></li>
					  <li><a href="<?= base_url('index.php/redes-com-fio-e-wifi')?>">Redes</a></li>
					  <li><a href="<?= base_url('index.php/capacitacao')?>">Capacitação</a></li>	
					</ol>
				</div>
			</div>
			
		</div>  
		  
		
	</div>
</section>


<section id="apresentacao">
	<div class="container">	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-lg-9 col-md-9 borda">
			<div id="banner-texto" class="hidden-xs hidden-sm">
				<img src="<?=base_url('assets/img/servicos/cftv_banner.jpg')?>" alt="CFTV e Segurança">
			</div>
			<div  id="descricao">			

				<div class="subtexto">
					<h4>CONVENCER O CLIENTE A COMPRAR O SEU PRODUTO É UMA DAS COISAS MAIS IMPORTANTES</h4>
					<p>						
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quidem distinctio qui! Laudantium est ut fugiat, eligendi itaque iste alias minus, neque consequatur blanditiis, velit animi eius veritatis dolorem dicta.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, iste, soluta. Quod reiciendis, fuga ratione quibusdam officia numquam totam optio. Ad quam autem, labore inventore alias, excepturi eum? Dolore, veritatis!
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, rerum. Iste maiores soluta labore quis, tempore porro ut. Officia pariatur natus ipsa assumenda modi cum explicabo tempora soluta animi quam.
					</p>
				</div>

				<div id="vantagens">
				    <div id="values">
				        <div class="text-center">
				        <div class="row">
				            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
				                <img class="wow fadeIn" data-wow-delay="0.8s" src="http://cdn2.hubspot.net/hubfs/538017/Servicethread/icon_process_product_engineering.png" alt="Missão Smarttel">
				                <h2 class="wow fadeInLeft" data-wow-delay="0.8s">Mapeamento de Processos</h2>
				                <p>
				                	Prestar serviços de qualidade, fomentando a pesquisa e o desenvolvimento técnico dos membros, inspirando a empreender e disseminando o conhecimento empresarial.
				                </p>
				            </div>              

				            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
				                <img class="wow fadeIn" data-wow-delay="1.0s" src="https://cdn0.iconfinder.com/data/icons/industrial-circle/512/cable-512.png" alt="Visão Smarttel">
				                <h2 class="wow fadeInLeft" data-wow-delay="1.0s">Cabeamento Estruturado</h2>
				                <p>
				                	Ser referência  na área de Telecomunicações dentre empresas juniores em âmbito nacional.
								</p>
				            </div>              

				            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
				                <img class="wow fadeIn" data-wow-delay="1.6s" src="https://cdn1.iconfinder.com/data/icons/business-bicolor-4/512/presentation-512.png" alt="Valores Smarttel">
				                <h2 class="wow fadeInLeft" data-wow-delay="1.6s">Planejamento de Projetos</h2>
				                <p>
				                	Integridade, humildade, busca contínua de conhecimento, desenvolvimento pessoal e profissional, foco em resultados e satisfação dos clientes.
				                </p>
				            </div>

				        </div>    
				        </div>  
				    </div>
				</div>

				<div class="subtexto">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quidem distinctio qui! Laudantium est ut fugiat, eligendi itaque iste alias minus, neque consequatur blanditiis, velit animi eius veritatis dolorem dicta.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, iste, soluta. Quod reiciendis, fuga ratione quibusdam officia numquam totam optio. Ad quam autem, labore inventore alias, excepturi eum? Dolore, veritatis!
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, rerum. Iste maiores soluta labore quis, tempore porro ut. Officia pariatur natus ipsa assumenda modi cum explicabo tempora soluta animi quam.
					</p>
				</div>	
			</div>
		</div>
		<div id="form-contato" class="col-xs-12 col-sm-12 col-md-3 col-lg-3 text-center">
			<h2><strong>Solicite um orçamento<span style="color:#DD5724;">!</span></strong></h2>
			<hr>
			<p class="alert-success col-md-12 col-sm-12 col-xs-12">
	            <?= $this->session->flashdata("success") ?>
	        </p>
	        <p class="alert-danger col-md-12 col-sm-12 col-xs-12">
	            <?= $this->session->flashdata("danger") ?>
	        </p>
			<?php echo form_error('g-recaptcha-response');?>
			<?php echo form_error("nome");?>
			<?php echo form_error("email");?>
			<?php echo form_error("telefone");?>
			<?php echo form_error("conheceu");?>
			<?php echo form_error("mensagem");?>	

			<?php echo form_open("servicos/enviar"); ?>
			<div class="row contact-form form-group">	
			
			<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="0.3s">				
				<label>Campos com * são obrigatórios</label>
			</div>
			<br>
			<br>
			<input type="hidden" name="assunto" id="assunto" value="CFTV">
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 wow fadeIn controls" data-wow-delay="0.3s">				
				<input name="nome" type="text" class="floatLabel" id="nome" value="<?=set_value('nome')?>">
				<label for="nome">Nome*</label>				
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 wow fadeIn controls" data-wow-delay="0.3s">
				<input name="email" type="email" class="floatLabel" id="email" value="<?=set_value('email')?>">
				<label for="email">Email*</label>
			</div>				
			<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn controls" data-wow-delay="0.3s">
				<input name="telefone" type="text" class="floatLabel" id="telefone" value="<?=set_value('telefone')?>">	
				<label for="telefone">Telefone*</label>							
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn controls" data-wow-delay="0.9s" >
				<textarea name="mensagem" rows="5" class="floatLabel" id="mensagem"><?=set_value('mensagem')?></textarea>
				<label for="mensagem">Mensagem</label>
			</div>	
			<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn controls" data-wow-delay="0.2s">
				<div class="g-recaptcha" data-sitekey="6LekpBsUAAAAAHjrsJAsOAjtUZ48VB2gf51_RG2p"></div>				
			</div>	

	        <div id="botao" class="col-xs-12 col-sm-12 col-lg-12 col-md-12 text-center">
	        <?php
	        echo form_button(array(
	            "class" => "btn",
	            "content" => "Enviar",
	            "type" => "submit",
	        ));
	        ?>
	        </div>
		      	
	        <?php echo form_close();?>      	
		      	
		      	
			</div><!--Row-->
		</div>
	</div>
	</div>			
</section>



<section id="porque">
	<div class="container text-center">
		<h2><strong>Por que fazer CFTV<span style="color:#DD5724;">?</span></strong></h2>
		<hr>		
	

		<div class="vantagens2">
				<div class="row">
					<div class="col-md-4">
						<img src="http://cdn2.hubspot.net/hubfs/538017/Servicethread/icon_process_product_engineering.png" alt="CFTV e Segurança SmartTel">
						<h3>Motivo 1</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci repudiandae quo harum possimus minus saepe voluptates ratione officia facere error, asperiores et unde, aut incidunt eius temporibus doloremque beatae, soluta.
						</p>
					</div>
					<div class="col-md-4">
						<img src="https://cdn0.iconfinder.com/data/icons/industrial-circle/512/cable-512.png" alt="CFTV e Segurança SmartTel">
						<h3>Motivo 2</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci repudiandae quo harum possimus minus saepe voluptates ratione officia facere error, asperiores et unde, aut incidunt eius temporibus doloremque beatae, soluta.
						</p>
					</div>
					<div class="col-md-4">
						<img src="https://cdn1.iconfinder.com/data/icons/business-bicolor-4/512/presentation-512.png" alt="CFTV e Segurança SmartTel">
						<h3>Motivo 3</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci repudiandae quo harum possimus minus saepe voluptates ratione officia facere error, asperiores et unde, aut incidunt eius temporibus doloremque beatae, soluta.
						</p>
					</div>
				</div>
		</div>

	</div>
</section>



<?php if($portfolios != null):?>
<section id="portfolio">
	<div class="container text-center">
		<h2><strong>Portfolio CFTV da Smart<span style="color:#DD5724;">Tel</span></strong></h2>
		<hr>
		<?php foreach($portfolios as $portfolio ):?>
		  <div class="hvr-grow">
		    <div class="card">
		      <div class="row">
		        <div class="col-xs-12 col-sm-12 col-sm-8 col-md-6 col-lg-5">		        	
		            <img class="img-responsive center-block" src="<?=$portfolio['foto_empresa']?>" alt="<?=$portfolio['empresa']?>">
		        </div>

		        <div class="text-left col-xs-12 col-sm-4 col-md-6 col-lg-7">
		            <div class="card-block">
		              <h3 class="card-title"><?=$portfolio['empresa']?></h3>
		              <p class="card-text">
						    <blockquote>
						      <span class="quotes leftq"> &ldquo;</span> <?=$portfolio['comentario']?> <span class="rightq quotes">&bdquo; </span>
						    </blockquote>
		              </p>
		            </div>
		        </div>
		        

		        </div>
		      </div>
		   </div>
		<?php endforeach?>
	</div>
</section>
<?php endif ?>

<section id="banner-rodape">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
				<h2>Tem algum projeto que precisa consultoria? Cheque nossa Carta de Serviços e Solicite um Orçamento</h2>					
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
				<?= anchor('index.php/contato', 'Fale Conosco!', array("class" => 'btn btn-primary'))?>
			</div>

		</div>
	</div>
	
</section>


<script src="<?=base_url('assets/js/contato_script.js')?>" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
    	$('#navHome').removeClass('active');
        $('#navServ').toggleClass('active');
    });
</script>