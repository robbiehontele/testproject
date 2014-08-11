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
   
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    
    <!-- Apple icons -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/icons/app_icon.png"/>  
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/icons/app_icon72x72.png"/>  
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<<?php echo get_template_directory_uri(); ?>/icons/app_icon144x144.png"/> 
	<!-- End of Apple icons -->
	<?php wp_head(); ?> 
  </head>
  <body>
	<div class="orientation-instructions"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4 col-md-3 sidebar">
           <div class="nav nav-sidebar">
            	<a href="<?php echo site_url(); ?>">
                	<div class="row bg-red">
                		<div class="col-xs-12"><img src="<?php echo get_template_directory_uri(); ?>/img/memoria.png" class="img-responsive" style="max-height:60px;"></div>
                    </div>
                </a>
           </div>