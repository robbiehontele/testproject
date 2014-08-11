<?php get_header(); ?>
<?php get_sidebar(); ?>           
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
    
        
		<?php the_content(); ?>
        

<?php endwhile; else: ?>
	<p><?php _e('Sorry, er werd geen inhoud gevonden.'); ?></p>
<?php endif; ?>
 
<?php get_footer(); ?>