<?php 

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_filter('wp_list_pages', create_function('$t', 'return str_replace("<a ", "<a class=\"btn btn-primary btn-lg btn-block\" ", $t);'));
add_filter('show_admin_bar', '__return_false');

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
	wp_register_script( 'docs', get_template_directory_uri() . '/js/docs.js');
	wp_register_script( 'rome', get_template_directory_uri() . '/js/rome.js');
	
	// Register styles
//wp_register_style('fancyboxcss',get_stylesheet_directory_uri().'/js/jquery.fancybox.css');
	
	// Enqueue script & style:
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap' );
	wp_enqueue_script( 'docs' );
	wp_enqueue_script( 'rome' );

	//wp_enqueue_style('fancyboxcss');
}


add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

?>