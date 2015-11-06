<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package miraforever
 */

get_header(); ?>
<div id="content" class="site-content container">
	<div class="row">
		<div class="col-md-12">
			<section id="home-page-last-news" class="row">
				<div class="col-md-12"><?php
					set_query_var('box_color', "orange" );
					get_template_part( 'partial/home/last-news' );
					?>
				</div>
			</section>
		</div>
		<div id="primary" class="content-area col-md-9">
			<main id="main" class="site-main" role="main">
				<section id="home-page-news" class="row">
					<div class="col-md-12">
						<span id="news_box_1"><?php
							set_query_var('category', 37 );
							set_query_var('post_per_page', 3 );
							set_query_var('thumbnail_type', thumbnails_rectangle_big );
							set_query_var('box_per_row', 3 );
							set_query_var('box_color', "orange" );
							set_query_var('orderby', "");
							set_query_var('title_box', "Novità Mirabilandia");
							set_query_var('facebook_miraforever_post', false);
							set_query_var('my_excerpt', "box_excerpt");
							get_template_part( 'partial/home/box' );
							?>
						</span>
					</div>
				</section>
				<section class="row">
					<span id="" class="col-md-6">
						<span id="content_box"><?php
							$box_post = get_post('35');
							echo apply_filters( 'the_content', $box_post->post_content );
							?>
						</span>
					</span>
					<span id="news_box_2" class="col-md-6 hidden-xs ">
<h2>Meteo Mirabilandia</h2>
						<div id="cont_f7ad19157d640204fc5cb823a9336f6a">
							<span id="h_f7ad19157d640204fc5cb823a9336f6a"></span>
							<script type="text/javascript" async src="http://www.ilmeteo.net/wid_loader/f7ad19157d640204fc5cb823a9336f6a"></script>
						</div>
					</span>
				</section>
				</section>


			</main><!--  #main   -->
		</div><!-- #primary -->
		<div class="col-md-3" id="sidebar-home-page">
			<?php get_sidebar('home');
			?>
		</div>
	</div>
</div><!-- #content -->
<!--inizio sezione larga con attrazioni e spettacoli ecc-->
<div class="container-fluid">
	<!-- carousell attrazioni, spettacoli e mappa del parco -->
	<section id="attrazioni_carousel" class="row carousel-home-page" >
		<div class="col-md-12">
			<?php
			set_query_var('id_carousel', "attrazioni" );
			set_query_var('title_carousel', "Attrazioni di Mirabilandia" );
			//set_query_var('background_image_carousel', "orange" );
			set_query_var('box_color', "attrazioni_rgba" );
			set_query_var('post_text_id',"14971");
			get_template_part( 'partial/home/carousel' );?>
		</div>
	</section>
	<section id="newsboxprova" class="row">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span id="" class="col-md-6">
						<span id="content_box"><?php
							$box_post = get_post('35');
							echo apply_filters( 'the_content', $box_post->post_content );
							?>
						</span>
					</span>

					<span id="news_box_2" class="col-md-6 hidden-xs "><?php
						set_query_var('category', 5 );
						set_query_var('post_per_page', 4 );
						set_query_var('thumbnail_type', thumbnails_rectangle_big );
						set_query_var('box_per_row', 2 );
						set_query_var('box_color', "grey" );
						set_query_var('orderby', "");
						set_query_var('title_box', "Lo sapevi che?");
						set_query_var('facebook_miraforever_post', false);
						set_query_var('my_excerpt', "box_little_excerpt");
						get_template_part( 'partial/home/box' );
						?>
					</span>
				</div>
			</div>
		</div>
	</section>

	<section id="spettacoli_carousel" class="row carousel-home-page" >
		<div class="col-md-12">
			<?php
			set_query_var('id_carousel', "spettacoli" );
			set_query_var('title_carousel', "Spettacoli di Mirabilandia" );
			//set_query_var('background_image_carousel', "orange" );
			set_query_var('box_color', "attrazioni_rgba" );
			set_query_var('post_text_id',"14971");
			get_template_part( 'partial/home/carousel' );?>
		</div>
	</section>

	<section id="home-page-news" class="row">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
						<span id="news_box_1"><?php
							set_query_var('category', 87 );
							set_query_var('post_per_page', 8 );
							set_query_var('thumbnail_type', thumbnails_rectangle_big );
							set_query_var('box_per_row', 4);
							set_query_var('box_color', "orange" );
							set_query_var('orderby', "");
							set_query_var('title_box', "Video Gallery");
							set_query_var('facebook_miraforever_post', false);
							set_query_var('my_excerpt', "box_excerpt");
							get_template_part( 'partial/home/box' );
							?>
						</span>

				</div>
			</div>
		</div>
	</section>
	<!-- fine carousell attrazioni, spettacoli e mappa del parco -->
	<section id="mappa_carousel" class="row carousel-home-page"  >
			<div  id="mappa" class="container-fluid attrazioni-display mappa-home-page carousel-div"  >
				<h1>La Mappa di Mirabilandia</h1>
				<div class="row">
					<div class="col-md-8 col-md-offset-2"><a href="http://mirabilandia.it/sites/mirabilandia.it/files/Fronte_mappa_2015_ESEC_zoom.jpg"><img class="img-responsive" src="<?php echo get_template_directory_uri() . '/image/mappacentro.jpg'?>" ></a></div>
				</div>
				<script type="text/javascript">
					$(document).ready(function() {
						var mappa = $("#mappa");
						var height = $(window).height();
						var mouseposition = mappa.position();
						$(window).scroll(function() {
							if ($(window).scrollTop() >= mouseposition.top-height) {
								$("#mappa").addClass("attrazioni-display-yes");
							}
						});
					});
				</script>
			</div>
	</section>

</div>


</div>
</div>

<?php get_footer(); ?>
