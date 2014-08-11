<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        
        <h3><?php the_title(); ?></h3>	
		<?php the_excerpt(); ?>
        

<?php endwhile; else: ?>
	<p><?php _e('Sorry, er werd geen inhoud gevonden.'); ?></p>
<?php endif; ?>




<div class="wp_navigation">

<?php if (!is_category() && !is_archive()) {
// add subpage list if single page
$children = wp_list_pages('title_li=&echo=0&child_of=' . $post->ID);
if ($children) { 
   
   
 if (!is_page('Startpagina')){
	echo "<p class='instruction small'>Maak je keuze:</p>";

 }
}
} ?>





<?php


if (!is_page('Startpagina')){
echo "<ul>";



// Menu items inladen
// Globalize the $post variable;
// probably already available in this context, but just in case...
global $post;
wp_list_pages( array(
    // Only pages that are children of the current page
    'child_of' => $post->ID,
    // Only show one level of hierarchy
    'depth' => 1,
	'exclude' => '1059, 1061, 1064, 1066, 1068, 1071, 1073, 1075, 1077, 1079, 1081, 1083, 1085, 1087, 1089, 1091, 1093, 1095, 1097',
	'title_li' => ''
) );

echo "<ul>";
}


$this_page = get_post($id);
$parent_id = $this_page->post_parent;

if ($parent_id !=0) {
	$parent = get_page($parent_id);
	$titel = get_the_title($parent->ID);
	if ($titel == "Ave! Welkom in Rome."){
		$titel = "Rome";
	}
	echo '<li class="page_item page-item-17" style="margin-top:25px;"><a class="btn btn-danger btn-lg btn-block" href="'.get_permalink($parent->ID).'" title=""><span class="glyphicon glyphicon-chevron-left"></span> <b>'.$titel.'</b></a></li>';
}
?>

</div>

<div class="row pelckmanslogo">
           	<div class="col-xs-12">
             		<img src="<?php echo get_template_directory_uri(); ?>/img/pelckmans.png" style="max-height:50px;" class="img-responsive pelckmans_logo">
           	</div>
           </div>
            
            
           
        </div>
        <div class="col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3 main no-bottom-margin">
          <div class="row no-bottom-margin">