<?php
/**
 * The template for displaying featured posts on the front page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>


<li id="post-<?php the_ID(); ?>" >
          	<div class="left-slide">
                <h2 style="text-transform:uppercase;"><?PHP the_title();?></h2>
               <div class="info">
			   <?PHP echo  the_content();?>
			   </div>
            </div>
            <div class="right-slide">
            	<?PHP echo the_post_thumbnail( 'galeria-slider' );?>
            </div>
          </li>

