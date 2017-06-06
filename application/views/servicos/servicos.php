<section id="banner">
	<div class="container">		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<h1 style="color: #fff;"><strong>Carta de Serviços Smart<span style="color:#DD5724;">tel</span></strong></h1>		
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

<section id="membros">
	<div class="container" id="cards">	

	<?php foreach ($servicos as $servico):?>

	<div class="card2 wow fadeIn col-xs-6 col-sm-6 col-md-3 col-lg-3 hvr-grow" data-wow-delay="0.4" >
	
		<?php if ($servico['foto'] != ''): ?>
	  	<img src="<?=$servico['foto']?>" alt="<?=$servico['nome']?>" style="width:50%; heigth:auto;">
	    <?php else: ?>
	  	<img src="<?=base_url('assets/img/semfoto.png')?>" style="width:50%; heigth:auto;">
	    <?php endif ?>

	  <div class="container2">
	    <h2><?=$servico['nome']?></h2>	
	    <p class="title2"><?=$servico['descricao']?></p>
	  </div>
	  <a class='btn' href='<?=base_url('index.php/'.$servico['controller'])?>' ">Contato</a>
	
	</div>


	<?php endforeach ?>
	</div>
</section>
