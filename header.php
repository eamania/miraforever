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


	
</head>
<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header container-fluid" role="banner">
			<!-- logo -->
			<div class="container">
				<div class="row">
					<div id="logo" class="logo">
						<img src="logo-cl.png" height="200px" class="img-responsive">
					</div>
				</div>
			</div>
			<!-- home page slideshow -->
			<div class="row" >
				<?php 
				if ( is_home() ) {
    					// This is the blog posts index
					get_template_part("content" , "home-header" );		
				} else {
					echo ("non è home page");
				}
				?>
			</div>
			<!-- MENU -->
			<div class="row">
				<div id="menu-top-fixed ">
					<nav class="site-branding navbar navbar-inverse  top-bar " role="navigation">
						<div class="container">
							<div class="col-md-4">
								<h3 class="site-title">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="logo-cl.png" height="60px" /><?php bloginfo( 'name' ); ?></a>
								</h3>
							</div>
							<div class="col-md-8 pull-left">
								<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
							</div>
						</div>
					</nav>
				</div>
			</div>
			

					</header><!-- #masthead -->

		<!-- inizio contenuto -->
		<div id="content" class="site-content container">
