<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<!-- #main -->

<footer class="" id="footer">
		<?php get_sidebar( 'footer' ); ?>
		
        <p>todos los derechos reservados. LITYO <?PHP echo date('Y');?>. Lima - Per&uacute;</p>
        
		<!-- .site-info --> 
</footer>
<!-- #colophon -->

<!-- #page -->

<?php wp_footer(); ?>
</body></html>