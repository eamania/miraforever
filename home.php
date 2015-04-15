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
			get_template_part( 'partial/home/lastnews' );
			?>
		</div>
	</section>
</div>
<div id="primary" class="content-area col-md-8">
	<main id="main" class="site-main" role="main">	
		<section id="home-page-news" class="row">

			<div class="col-md-12">
				<?php
				get_template_part( 'partial/home/novelty' );
				?>
			</div>

			<div class="col-md-6">
				<?php
				get_template_part( 'partial/home/sapeviche' );
				?>
			</div>
			<div class="col-md-6">
				<?php
				get_template_part( 'partial/home/otherpark' );
				?>
			</div>
			<div class="col-md-12">
				<?php
				get_template_part( 'partial/home/attraction' );
				?>
			</div>
			<div class="col-md-12"
			><?php
			get_template_part( 'partial/home/oldattraction' );
			?>
		</div>
		<div class="col-md-6">
			<?php
			get_template_part( 'partial/home/show' );
			?>
		</div>
		<div class="col-md-6">
			<?php
			get_template_part( 'partial/home/shopfood' );
			?>
		</div>
	</section>

</main><!-- #main --> 
</div><!-- #primary -->
<div class="col-md-4">
	<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
