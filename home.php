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
<div class="col-md-12">
	<section id="home-page-last-news" class="row">
		<div class="col-md-12"><?php
			get_template_part( 'partial/home/last-news' );


			?>
		</div>
	</section>
</div>
<div id="primary" class="content-area col-md-9">
	<main id="main" class="site-main" role="main">	
		<section id="home-page-news" class="row">
			<div class="col-md-12">			
				<span id="novelty-news"><?php
					set_query_var('category', novita );
					set_query_var('post_per_page', 3 );
					set_query_var('thumbnail_type', thumbnails_rectangle_big );
					set_query_var('box_per_row', 3 );
					get_template_part( 'partial/home/box-big' );
					?>
				</span>
			</div>
		</section>
		<section class="row">
			<div class="col-md-12">			
				<span id="" class="col-md-6 no_padding"><?php
					$examplePost = get_post('35');
				echo apply_filters( 'the_content', $examplePost->post_content ); // Si faccia questo al suo posto
				?>
			</span>
			<span id="" class="col-md-6 hidden-xs no_padding"><?php
				set_query_var('category', novita );
				set_query_var('post_per_page', 4 );
				set_query_var('thumbnail_type', thumbnails_rectangle );
				set_query_var('box_per_row', 3 );
				get_template_part( 'partial/home/box-tiny' );

				?>
			</span>
		</div>
	</section>
	<section class="row">

	</section>


</section>

</main><!-- #main --> 
</div><!-- #primary -->
<div class="col-md-3">
	<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
