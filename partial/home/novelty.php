<h2>Novità</h2>	
<div class="boxes-news col-md-12"><!--blocco ultime news home page -->
	<span><?php 
		$the_query = new WP_Query(array(
			'posts_per_page' => 4,
			)); 
		while ( $the_query->have_posts() ) : 
			$the_query->the_post();
		?>
		<a href="">
			<article class="box novelty col-md-3" id="latest-box-id-<?php the_ID(); ?>"><!-- 5 blocchi singoli delle news -->
				<?php the_post_thumbnail('thumbnail');?>
				<div class="title-header" ><?php the_title(); ?></h4></div> 
				<div class="the-excerpt" ><?php echo novelty_excerpt()."[...]"; ?></div>
			</article>
		</a>
		<!-- item -->
		<?php 
		endwhile; 
		wp_reset_postdata();
		?>
	</span>

</div>







