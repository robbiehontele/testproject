<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-title" content="Rome">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Memoria - Rome</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/cover.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/rome.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Apple icons -->
    
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/icons/app_icon.png"/>  
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/icons/app_icon72x72.png"/>  
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/icons/app_icon144x144.png"/> 
<!-- End of Apple icons -->
   

  </head>

  <body>
  	<div class="ipad-instructions"><img src="<?php echo get_template_directory_uri(); ?>/img/ipad_homescreen.png" class="img-responsive"></div>
    <div class="orientation-instructions"></div>
	<div id="dot-matrix"></div>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="inner cover">
            <h1 class="cover-heading">Rome</h1>
            <p class="lead">Memoria neemt je mee op digitale ontdekkingsreis!</p> 	
            <p class="lead">
              <a href="?page_id=260" class="btn btn-lg btn-default btnStart">Verken 'Alle wegen leiden naar Rome'</a>
            </p>
            
            <p class="lead">
              <a href="?page_id=5" class="btn btn-lg btn-default btnStart">Verken het oude Rome</a>
            </p>
          </div>
          <div class="mastfoot">
            <div class="inner">
            <p class="footerimg center-block"><img src="<?php echo get_template_directory_uri(); ?>/img/pelckmans_dark.png" class="img-responsive center-block"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
	//Wordt de pagina bekeken met een iPad?
	var isiPad = navigator.userAgent.match(/iPad/i) != null;
	//Werd de pagina toegevoegd aan het startscherm?
	var isRanFromHomeScreen = navigator.standalone;
	
	if(isiPad && !isRanFromHomeScreen){
		$('.ipad-instructions').show();
		$('.btnStart').hide();
	}
	
	//Deze functie detecteerd verandering in orentatie van een ipad
	$(window).bind('orientationchange', function(event) {
  		if ( isiPad && isRanFromHomeScreen && orientation == 0 ) {
     		$('.orientation-instructions').show();
    	}
    	else if ( isiPad && isRanFromHomeScreen && orientation == 180 ) {
     		$('.orientation-instructions').show();
    	}
		else {
			$('.orientation-instructions').hide();	
		}
	});
	
});

$( document ).on(
"click",
"a",
function( event ){
 
// Stop the default behavior of the browser, which
// is to change the URL of the page.
event.preventDefault();
 
// Manually change the location of the page to stay in
// "Standalone" mode and change the URL at the same time.
location.href = $( event.target ).attr( "href" );
 
}
);

document.ontouchmove = function(event){
    event.preventDefault();
}

</script>
  </body>
</html>