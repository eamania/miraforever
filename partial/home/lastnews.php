<h2>Ultime Notizie</h2>	
<div class="home-page-last-news col-md-12"><!--blocco ultime news home page -->
	<span><?php 
		$the_query = new WP_Query(array(
			'posts_per_page' => 1,
			)); 
		while ( $the_query->have_posts() ) : 
			$the_query->the_post();
		?>
		<a href="">
			<article class="lastnews-box big col-md-4" id="latest-box-id-<?php the_ID(); ?>"><!-- 5 blocchi singoli delle news -->
				<?php the_post_thumbnail('thumbnail');?>
				<div class="title-header-box"><div class="title-header" ><?php the_title(); ?></h4></div> </div>
				<!--<div class="col-md-12"><div class="excerpt-header"><?php the_excerpt();?></div></div>-->
				<div class="the-excerpt" ><?php echo the_excerpt()."[...]"; ?></div>
			</article>
		</a>
		<!-- item -->
		<?php 
		endwhile; 
		wp_reset_postdata();
		?>
	</span>
	<span>
		<?php 
		$the_query = new WP_Query(array(
			'posts_per_page' => 4,
			)); 
		while ( $the_query->have_posts() ) : 
			$the_query->the_post();
		?>
		<a href="">
			<article class="lastnews-box col-md-4" id="latest-box-id-<?php the_ID(); ?>"><!-- 5 blocchi singoli delle news -->
				<?php the_post_thumbnail('thumbnail');?>
				<div class="title-header-box"><div class="title-header" ><?php the_title(); ?></h4></div> </div>
				<!--<div class="col-md-12"><div class="excerpt-header"><?php the_excerpt();?></div></div>-->
				<div class="the-excerpt" ><?php echo last_news_excerpt()."[...]"; ?></div>
			</article>
		</a>
		<!-- item -->
		<?php 
		endwhile; 
		wp_reset_postdata();
		?>
	</span>
</div>







