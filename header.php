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
	<script src="http://localhost/miraforever/wp-content/themes/miraforever/inc/carouselljs/owl.carousel.js"></script>

</head>
<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.4&appId=127765470613452";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header container-fluid" role="banner">
		<!-- logo and name of website-->
		<div class="hidden-sm hidden-xs">
			<?php
			if ( is_home() ) {
				get_template_part("partial/home/carousell" , "logo" );
			} else {
				get_template_part("partial/home/carousell" , "logo" );

			}
			?>
		</div>
		<!-- home page slideshow -->
		<div class="row hidden-sm hidden-xs" >
			<?php
			if ( is_home() ) {
				// This is the blog posts index
				get_template_part("partial/home/carousell" , "header" );
			}
			elseif ( 'attrazioni' == get_post_type() ) {

				get_template_part("partial/attrazioni/header" );			}

			else
			{
				get_template_part("partial/share/article", "header" );

			}

			?>
		</div>
		<!-- MENU -->
		<div class="row" style="height: 0;">

			<div id="menu-top-fixed-mobile" class="hidden-lg hidden-md ">



				<nav class="navbar navbar-default navbar-fixed-top " role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><img src="http://localhost/miraforever/logo-cl.png"  />Mirabilandia Forever</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<?php
						wp_nav_menu( array(
								'theme_location' => 'mobile',
								'depth' => 2,
								'container' => false,
								'menu_class' => 'nav navbar-nav',
								'fallback_cb' => 'wp_page_menu',
								//Process nav menu using our custom nav walker
								'walker' => new wp_bootstrap_navwalker())
						);
						?>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
			<div id="menu-top-fixed" class="hidden-sm hidden-xs">
				<nav class="site-branding navbar navbar-inverse top-bar " role="navigation">
					<div class="container">
						<div class="row" >
							<div class="col-md-12">
								<div class="mega-menu-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://localhost/miraforever/logo-cl.png" height="60px" /><span class="hidden-sm hidden-xs"><?php bloginfo( 'name' ); ?></span></a></div>
								<span id="mega-menu-prymary-big" ><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></span>
								<?php get_template_part("partial/megamenu/socialsearch" );?>

							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header><!-- #masthead close container fluid -->

	<!-- inizio contenuto -->


