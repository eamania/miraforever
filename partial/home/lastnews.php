	
<div id="home-page-news" class="col-md-12"><!--blocco ultime news home page -->

	<?php 
	$the_query = new WP_Query(array(
		'posts_per_page' => 5,
		)); 
	while ( $the_query->have_posts() ) : 
		$the_query->the_post();
	?>
	<article class="item lastnews-box col-md-3"><!-- 5 blocchi singoli delle news -->
		<?php the_post_thumbnail('thumbnail');?>
		<div class="col-md-12"><div class="title-header" ><?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?></h4></div> </div>
		<!--<div class="col-md-12"><div class="excerpt-header"><?php the_excerpt();?></div></div>-->
	</article><!-- item -->
	<?php 
	endwhile; 
	wp_reset_postdata();
	?>
</div>







