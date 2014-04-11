<?php
/**
 * The template for displaying featured posts on the front page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>


<article>
          	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(200,200) );
$url = $thumb['0']; ?>
<a href="<?PHP echo get_permalink();?>" title="<?PHP the_title();?>" style="background-image:url(<?PHP echo  $url;?>)">
&nbsp;
            	
          </a>
         </article>

