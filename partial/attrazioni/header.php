<?php
/**
 * @package miraforever
 */
?>



<div id="carousel-header" class="carousel  carousel-fade slide" data-ride="carousel">
	<!-- Indicators -->
	<?php while ( have_posts() ) : the_post(); ?>

		<?php  the_post_thumbnail('thumbnails_article_big', array('class' => "article-featured-image img-responsive"));?>



	<?php endwhile; // end of the loop. ?>
</div><!--carousel header-->
