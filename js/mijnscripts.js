
$.fn.preload = function() {
	
    this.each(function(){
        $('<img/>')[0].src = this;
    });
}

// Usage:

$(['img/oude_rome.jpg']).preload();

document.ontouchmove = function(event){
    event.preventDefault();
}

$(window).resize(function() {
	
	
	
  if ($(window).width() < 1020 || $(window).height() < 600) {
     $(".smallscreen").css("display","block");
	 $("body").css("overflow", "hidden");
  }
 else {
    $(".smallscreen").css("display","none");
	$("body").css("overflow", "auto");
	determineSize();
 }
 
 $('.hs-area').hotspotter();
	$('#hotspotimage').css('width','774px');
	$('#hotspotimage').css('height','516px');
 
});

$(document).on('click', 'a', function(e) {
    e.preventDefault();
    document.location.href = $(this).attr('href');
	
	
	
});



$(document).ready(function($) {
			
           
			
			$("#left_pane_content .showDiv").on("click touchstart", function(e){
      			var id =  $(this).attr('id'); 		
				id = id.split('_');	
      			$("#right_pane_content .hide").hide(); 	
				
				var divtodisplay = "#div_"+id[1];	
      			$("#div_"+id[1]).show();		
				$('.hs-area').hotspotter();
				
  			});
			
			
			
			$('#thumbs .thumbnail').on("click touchstart", function(e){
				
				var description = $(this).find(".description").html();
				
				$(".img").removeAttr('id');
				
				$(".img").attr('id', $(this).attr('id'));
				$(".img").find(".caption").html(description);
				$(".caption").hide();
				
			});
			
			$('.showDiv').first().trigger("click");
			$('.thumbnail').first().trigger( "click" );
			/*if ($(window).width() > 1020) {
			determineSize();
			}*/
			determineSize();
			
			$('.infobutton').append("<p>i</p>");
			$('.caption').hide();
			$('.infobutton').on("click touchstart", function(e){
				var previousItem = $(this).prev();
				previousItem.toggle();
			});	
			$('.hs-area').hotspotter();
			$("a.inline").fancybox({
    			'autoDimensions': true		
    			
 			});
			$('#hotspotimage').css('width','774px');
			$('#hotspotimage').css('height','516px');
			
			 
			
        });
		
		function determineSize(){
			var ratio = 765 / 510;
			var height = $(".hotspotDrawing").height();
			var width = $(".hotspotDrawing").width();
			if(height > width){
				//aanpassen op breedte
				
				$("#hotspotimage").width(width);
			}
			else if (width > height){
				//aanpassen op hoogte
				
				$('#hotspotimage').height(height);
			}
		
			if ( navigator.userAgent.indexOf('iPad') == -1 ){
			
			}
  			else {
			
	  		if(window.navigator.standalone == false){
				
			
				$(".ipadwebapp").show();
			
			}
			
        	}
		};