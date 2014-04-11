<?php
/**
 * The template for displaying posts in the Image post format
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<div id="tab-<?php the_ID(); ?>" class="tabContent">
            	<div class="tabContent-txt">
					<h3><?PHP the_title();?></h3>
					<div class="info">
					<?PHP echo the_content();?>
					
					</div>
					
				</div>
				<?PHP
				$sliders=get_post_meta(get_the_ID(),'wpcf-imagen');
          
		 // $email_address_trainers=types_render_field("imagen", array("output"=>"html"));
		  ?>
		  
		  <ul class="rslides-gallery">
		  <?PHP
foreach ($sliders as $url):
 ?>
 
 <li><?PHP     echo get_the_post_thumbnail(get_the_ID(), 'galeria-slider',array('src'=>$url));
 ?></li>
   
 
 <?PHP
endforeach;
				
				?>
				
					
				
                </ul>
            </div>
