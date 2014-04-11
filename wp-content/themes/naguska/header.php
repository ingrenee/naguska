<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
<?php wp_head(); ?>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.min.js"></script>
<script>
  $(function() {
	$(".rslides").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        speed: 500,
        maxwidth: 1100,
        namespace: "centered-btns"
      });
	  
	  
	  $("#qtranslate-2-chooser li.lang-es").after($("#qtranslate-2-chooser li.lang-en"));
	  
  });
  
  
  
  
  
</script>


<script>
  $(function() {
	$(".rslides-gallery").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        speed: 500,
        maxwidth: 1100,
        namespace: "centered-btns"
      });
	  
  	$(".tabContent").not(":first").hide(); 
	$("ul.tabs li:first").addClass("active").show();  
	$("ul.tabs li").click(function() {
		$("ul.tabs li.active").removeClass("active"); 
		$(this).addClass("active"); 
		$(".tabContent").hide();		
		$($('a',this).attr("href")).fadeIn('slow'); 
		return false;
	});
  });
</script>

</head>

<body <?php body_class(); ?>>





<header>
		<div class="container"> 
				<!--  cabecera logo -->
				<div class="header">
						<div class="content"> <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<span><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg"></span></a> </div>
				</div>
				
				<!--  menu  -->
				<div class="menu">
						<div class="content" id="menu-main">
						
								<?php  
		
		
		
		
		$defaults = array(
	'theme_location'  => 'primary',
	'menu'            => '',
	'container'       => false,
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'nav-pages',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => false,
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );
		
		
		
		
		 ?>
						
						
								<ul id="menu2">
										<li class="active"><a href="index.php">HOME</a></li>
										<li><a href="about.php">NOSOTROS</a></li>
										<li><a href="productos.php">PRODUCTOS</a> </li>
										<li><a href="catalogo.php">ARTESANOS</a> </li>
										<li><a href="#">CONDICIONES DE EXPORTACIÓN</a> </li>
										<li><a href="contacto.php">CONTACTO</a></li>
								</ul>
						</div>
				</div>
				
				<!-- botones de lenguajes y sociales -->
				<div class="sub">
						<div class="socialbar">
								<div class="content">
										<ul>
												<li> <a href="#" class="twitter"><span>twitter</span></a>
												<li> <a href="#" class="facebook"><span>facebook</span></a> </li>
										</ul>
								</div>
						</div>
						<div class="lang">
								<div class="content">
								
								<?php get_sidebar( 'header' ); ?>
								
										<ul>
												<li class="active"><a href="#">ESPAÑOL <span>ES</span></a></li>
												<li><a href="#">ENGLISH <span>EN</span></a></li>
										</ul>
								</div>
						</div>
				</div>
		</div>
</header>





