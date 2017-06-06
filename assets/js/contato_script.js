
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
