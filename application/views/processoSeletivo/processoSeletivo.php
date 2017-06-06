<section class="processo-image" style="background-image:url('<?=base_url('assets/img/trabalhe-conosco-smarttel2.png');?>');">
  <div class="processo-text">
    <h1><strong>Trabalhe<span style="color:#DD5724;"> Conosco</span></strong></h1>
  </div>
</section>

<section id="titulo-seletivo">
	<div class="container text-center">		
		<h1>Parece que o processo seletivo ainda não abriu</h1>
		<h3>Deixe seu email abaixo que avisaremos quando ele começar!</h3>
	</div>

</section>

	<section id="form">
		<div class="container">
			<?php echo form_open("processoSeletivo/cadastrar"); ?>
			<div class="row contact-form form-group">
				<div class="col-md-12 col-sm-12 col-xs-12">
	        		<p class="alert-success">
	            			<?= $this->session->flashdata("success") ?>
	        		</p>
			        <p class="alert-danger">
			            	<?= $this->session->flashdata("danger") ?>
			        </p>
			        </div>			
			
				<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="0.3s"><?php echo form_error("email");?></div><br>
				<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn controls" data-wow-delay="0.3s">
					<input name="email" type="email" class="floatLabel" id="email" value="<?=set_value('email')?>">
					<label for="email">Email</label>
				</div>					
			
			<div class="col-md-6 wow fadeIn controls" data-wow-delay="0.2s" >
				<div class="g-recaptcha" data-sitekey="6LekpBsUAAAAAHjrsJAsOAjtUZ48VB2gf51_RG2p"></div>	
				<br>			
				<?php echo form_error('g-recaptcha-response');?>
			</div>	
			<div id="botao" class="col-md-6 wow fadeIn text-right">
		        <?php
		        echo form_button(array(
		            "class" => "btn",
		            "content" => "Enviar",
		            "type" => "submit",
		        ));	        
		        ?>
		        </div>
		        <?php
		        echo form_close();       
		        ?>
	      	
			</div><!--Row-->
		</div>


	</section>

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



     $('#navHome').removeClass('active');
     $('#navProcess').toggleClass('active')


	</script>
	
	