jQuery( document ).ready(function() {
		
			//Wordt de pagina bekeken met een iPad?
	var isiPad = navigator.userAgent.match(/iPad/i) != null;
	//Werd de pagina toegevoegd aan het startscherm?
	var isRanFromHomeScreen = navigator.standalone;
	
	if(isiPad && !isRanFromHomeScreen){
		jQuery('.ipad-instructions').show();
		jQuery('.btnStart').hide();
	}
	
	//Deze functie detecteerd verandering in orentatie van een ipad
	jQuery(window).bind('orientationchange', function(event) {
  		if ( isiPad && orientation == 0 ) {
		
     		jQuery('.orientation-instructions').show();
    	}
    	else if ( isiPad && orientation == 180 ) {
     		jQuery('.orientation-instructions').show();
		
    	}
		else {
			jQuery('.orientation-instructions').hide();	
		}
	});
			
			
		});
		
		
		
	

		
		
		jQuery(document).on('click', 'a', function(e) {
    	e.preventDefault();
   		 document.location.href = jQuery(this).attr('href');
		});
		
		