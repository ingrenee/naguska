<?php
/**
 * The Content Sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

if ( ! is_active_sidebar( 'sidebar-5' ) ) {
	return;
}
?>
<section class="cont-map">
	<?php dynamic_sidebar( 'sidebar-5' ); ?>
</section><!-- #content-sidebar -->
