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
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Scendi', 'miraforever' ); ?></a>
		<header id="masthead" class="site-header container-fluid" role="banner">
			<div class="row">
				<div id="menu-top-fixed">
					<nav class="site-branding navbar navbar-inverse navbar-fixed-top top-bar " role="navigation">
						<div class="container">
							<div class="col-md-4">
								<h3 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
							</div>
							<div class="col-md-8 pull-left">
								<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
							</div>
						</div>
					</nav>
				</div>
			</div>
			<div class="row" style="height:100%">
				<div id="myCarousel" class="carousel slide">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for Slides -->
					<div class="carousel-inner">
						<div class="item active">
							<!-- Set the first background image using inline CSS below. -->
							<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
							<div class="carousel-caption">
								<h2>Caption 1</h2>
							</div>
						</div>
						<div class="item">
							<!-- Set the second background image using inline CSS below. -->
							<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
							<div class="carousel-caption">
								<h2>Caption 2</h2>
							</div>
						</div>
						<div class="item">
							<!-- Set the third background image using inline CSS below. -->
							<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
							<div class="carousel-caption">
								<h2>Caption 3</h2>
							</div>
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="icon-prev"></span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="icon-next"></span>
					</a>

				</div>


			</div>



		</header><!-- #masthead -->

		<div id="content" class="site-content container">
