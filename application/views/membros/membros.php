<section id="banner">
	<div class="container">		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<h1 style="color: #fff;"><strong>Membros Smart<span style="color:#DD5724;">tel</span></strong></h1>		
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

	<?php 
	foreach ($membros as $membro):?>		
	<!--
	<div class="wow fadeIn col-md-3 col-xs-6 col-sm-6"  data-wow-delay="0.4">	
		<a class='hvr-grow' href='#' data-toggle="modal" data-target="#<?=$membro['id']?>">
        <div class='card'>
		  <div class='card-img-top'>
		    <?php if ($membro['url_foto'] != ''): ?>
		  	<img src="<?=$membro['url_foto']?>" alt="<?=$membro['nome']?>" style="width:100%; heigth:auto;">
		    <?php else: ?>
		  	<img src="<?=base_url('assets/img/semfoto.png')?>" style="width:100%; heigth:auto;">
		    <?php endif ?>
		  </div>
		  <div class='card-block'>
		    <h2 class='card-title'><strong><?= $membro['nome']?></strong></h2>		    
		    <p class='card-text'><?= character_limiter($membro['cargo'],50) ?></p>		    
		</div>
		</div>
		</a>
	</div>
	-->



	<div class="card2 wow fadeIn col-xs-6 col-sm-6 col-md-3 col-lg-3 hvr-grow" data-wow-delay="0.4" >
	
		<?php if ($membro['url_foto'] != ''): ?>
	  	<img src="<?=$membro['url_foto']?>" alt="<?=$membro['nome']?>" style="width:100%; heigth:auto;">
	    <?php else: ?>
	  	<img src="<?=base_url('assets/img/semfoto.png')?>" style="width:100%; heigth:auto;">
	    <?php endif ?>

	  <div class="container2">
	    <h2><?=$membro['nome']?></h2>	
	    <p class="title2"><?=html_escape($membro['cargo'])?></p>
	    <div style="margin: 24px 20px;">
	      <a href="<?=$membro['linkedin']?>" target="_blank"><i class="fa fa-linkedin"></i></a>  
	      <a href="<?=$membro['facebook']?>" target="_blank"><i class="fa fa-facebook"></i></a> 
	    </div>
	   <a class='btn' href='#' data-toggle="modal" data-target="#<?=$membro['id']?>">
	   Contato
	   </a>
	  </div>
	
	</div>
	

		<!-- Modal -->
	<div id="<?=$membro['id']?>" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">	        	        
	        <div class="col-md-12 col-sm-12 col-xs-12">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <div class="fotoPerfil">
	        	<?php if ($membro['url_foto'] != ''): ?>
				<img src="<?=$membro['url_foto']?>" alt="<?=$membro['nome']?>" style="width:100%; heigth:auto;">
			<?php else: ?>
				<img src="<?=base_url('assets/img/semfoto.png')?>" style="width:100%; heigth:auto;">
			<?php endif ?>
	        </div>
	        <h2 class="modal-title"><?=$membro['nome']?></h2>	        
	        <h4><span class="glyphicon glyphicon-briefcase"></span>  <?=html_escape($membro['cargo'])?></h4>
	        
	        <span class="glyphicon glyphicon-earphone"></span>  <?=html_escape($membro['telefone'])?><br>
	        <span class="glyphicon glyphicon-phone"></span>  <?=html_escape($membro['celular'])?><br>	        
	        <span class="glyphicon glyphicon-envelope"></span>  <?=html_escape($membro['email'])?>	

			<ul class="list-inline">				
				<li><a href="<?=$membro['facebook']?>" target="_blank"><img src="<?=base_url('assets/img/facebook.png')?>"></a></li>
				<li><a href="<?=$membro['linkedin']?>" target="_blank"><img src="<?=base_url('assets/img/linkedin.png')?>"></a></li>
			</ul>
	        </div>
			

	
	      </div>
	    </div>

	  </div>
	</div>

	<?php endforeach ?>
	


	</div>
</section>

<script type="text/javascript">
    $(document).ready(function() {
    	$('#navHome').removeClass('active');
        $('#navMembers').toggleClass('active');
    });
</script>