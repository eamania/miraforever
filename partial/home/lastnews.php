<h2>Ultime Notizie</h2>	
<div class="home-page-last-news col-md-12"><!--blocco ultime news home page -->
	<?php 
	$the_query = new WP_Query(array(
		'posts_per_page' => 5,
		)); 
	while ( $the_query->have_posts() ) : 
		$the_query->the_post();
	?>
	
	<article class="lastnews-box col-md-4"><!-- 5 blocchi singoli delle news -->
		<a href="">
			<?php the_post_thumbnail('thumbnail');?>
			<div class="title-header-box"><div class="title-header" ><?php the_title(); ?></h4></div> </div>
			<!--<div class="col-md-12"><div class="excerpt-header"><?php the_excerpt();?></div></div>-->
		</a>
	</article>
	<!-- item -->
	<?php 
	endwhile; 
	wp_reset_postdata();
	?>
</div>







