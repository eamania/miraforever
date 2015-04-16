<h2>Ultime Notizie</h2>	

<div class="boxes-news col-md-12"><!--blocco ultime news home page -->
	<span><?php 
		$the_query = new WP_Query(array(
			'posts_per_page' => 1,
			)); 
		while ( $the_query->have_posts() ) : 
			$the_query->the_post();
		?>
		<a href="">

			<article class="box lastnews big col-md-4" id="latest-box-id-<?php the_ID(); ?>"><!-- 5 blocchi singoli delle news -->
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnails_square', array( 'class' => 'img-responsive' ) ); }?>
				<div class="title-header" ><?php the_title(); ?></h4></div> 
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
			'posts_per_page' => 2,
			)); 
		while ( $the_query->have_posts() ) : 
			$the_query->the_post();
		?>
		<a href="">
			<article class="box lastnews col-md-4"  id="latest-box-id-<?php the_ID(); ?>"><!-- 5 blocchi singoli delle news -->
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnails_rectangle', array( 'class' => 'img-responsive' ) ); }?>
				<div class="title-header" ><?php the_title(); ?></h4></div> 
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







