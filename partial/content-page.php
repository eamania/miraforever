<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package miraforever
 */
?>

<div class="col-wrap">
	<div class="site-content">
		<div id="primary" class="content-area col-md-9">
			<main id="main" class="site-main" role="main">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<div id="content-article-header" class="article-content">
							<?php the_title('<h1 class="entry-title">', '</h1>');?>
							<?php

									the_post_thumbnail('thumbnails_article_big', array('class' => "article-featured-image img-responsive"));

							?>
						</div>
						<div class="entry-meta">
						</div>
						<!-- .entry-meta -->
					</header>
					<!-- .entry-header -->


					<div class="entry-content">
						<?php the_content(); ?>
						<?php
						wp_link_pages(array(
							'before' => '<div class="page-links">' . __('Pages:', 'miraforever'),
							'after' => '</div>',
						));
						?>
					</div>
					<!-- .entry-content -->

					<footer class="entry-footer">
						<?php //miraforever_entry_footer(); ?>
					</footer>
					<!-- .entry-footer -->
				</article>
				<!-- #post-## -->
			</main>
			<!-- #main -->
			<?php// get_template_part('partial/navigation','article');?>

		</div><!-- #primary -->
	</div>

	<div id="sidebar-article" class="col-md-3 sidebar-article col">
		<?php get_sidebar(); ?>
	</div>
</div>
