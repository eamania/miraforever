<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package miraforever
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>

	<!--mmmm -->
	<link rel="stylesheet" type="text/css" href="http://localhost/miraforever/wp-content/themes/miraforever/less/megamenu.css" />



</head>
<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header container-fluid" role="banner">
			<!-- logo and name of website-->
			<div class="container hidden-sm hidden-xs">	
				<?php 
				if ( is_home() ) {
					get_template_part("partial/home/carousell" , "logo" );		
				} else {}
				?>
			</div>
			<!-- home page slideshow -->
			<div class="row hidden-sm hidden-xs" >
				<?php 
				if ( is_home() ) {
    					// This is the blog posts index
					get_template_part("partial/home/carousell" , "header" );		
				} else {}
				
				?>
			</div>
			<!-- MENU -->
			<div class="row">
				<div id="menu-top-fixed">
					<nav class="site-branding navbar navbar-inverse top-bar " role="navigation">
						<div class="container">						
							<div class="row">
								<div class="col-md-12">
									<div class="mega-menu-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="logo-cl.png" height="60px" /><span class="hidden-sm hidden-xs"><?php bloginfo( 'name' ); ?></span></a></div>				
									<span id="mega-menu-prymary-big"><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></span>
									<?php get_template_part("partial/megamenu/socialsearch" );?>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</header><!-- #masthead close container fluid -->

		<!-- inizio contenuto -->
		<div id="content" class="site-content container">
			<div class="row">
				
