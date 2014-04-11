<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<section class="first" >
	<section class="cont-items">
	<h2>cat&aacute;logo</h2>
	<?PHP
	get_sidebar();
	?>
	</section>
	
	
	
	
	
	<section class="cont-thumbs">
		<ul class="tabs">
		<?php if ( have_posts() ) : ?>
		
		<?PHP
		while ( have_posts() ) : the_post();
		?>
			<li><a href="#tab-<?PHP echo get_the_ID();?>"><?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail'); ?></a></li>
			
	    <?PHP endwhile;?>
		<?PHP endif;?>
			
			
		</ul>
    </section>
	
	
	
	
	<section class="cont-gallery">
		<div class="tabContainer">
	
<?php if ( have_posts() ) : ?>

		

			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', 'tab' );

					endwhile;
					// Previous/next page navigation.
					twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
			
			</div>
			</section>
		<!-- #content -->
	</section><!-- #primary -->

<?php
//get_sidebar( 'content' );

get_footer();
