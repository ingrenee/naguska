<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


<section class="first"><?php
	if ( is_front_page()):
		// Include the featured content template.
		get_template_part( 'home-slider' );
?>

<?PHP else:?>

<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
		<!-- #content -->
		
		<?php get_sidebar( 'decorativo' ); ?>
        
  
        
		<?php get_sidebar( 'mapa' ); ?>

<?PHP
	
	endif;
?>
		
</section>
<?php
	if ( is_front_page()): ?>
	<section class="second">
	<?PHP
		// Include the featured content template.
		get_template_part( 'home-novedades' );
?>
</section>
<?PHP endif;?>
<!-- #primary --> 

<!-- #main-content -->

<?php

get_footer();

