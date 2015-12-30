<?php
/**
 * @package miraforever
 */
?>


<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnails_article_big' , false );?>

<div id="carousel-header" class="carousel  carousel-fade slide"  style="background-image: url('<?php echo $url; ?>');background-repeat: no-repeat; background-position: center; background-size: cover">
	<!-- Indicators -->
	<?php while ( have_posts() ) : the_post();


		?>

		<?php $sfondo = "the_post_thumbnail('thumbnails_article_big', array('class' => 'article-featured-image img-responsive'));" ; ?>
		<div class="container" >
			<div class="row">
				<div class="col-md-6">				</div>
				<div class="col-md-6"><?php echo do_shortcode('[gallery limit="1"]'); ?></div>
			</div>
		</div>


	<?php endwhile; // end of the loop. ?>
</div><!--carousel header-->
