<h2>Ultime Notizie</h2>	

<div class="boxes-news"><!--blocco ultime news home page -->
	<span><?php 
		$the_query = new WP_Query(array(
			'posts_per_page' => 1,
			)); 
		while ( $the_query->have_posts() ) : 
			$the_query->the_post();
		?>
		<a href="<?php echo get_permalink(); ?>">

			<article class="col-md-4 box lastnews big col-md-4" id="latest-box-id-<?php the_ID(); ?>"><!-- 5 blocchi singoli delle news -->
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnails_square', array( 'class' => 'img-responsive' ) ); }?>
				<span class="entry-date"><?php echo get_the_date(); ?></span>
				<span class="title-header" ><?php the_title(); ?></h4></span> 
				<span class="the-excerpt" ><?php echo the_excerpt()."[...]"; ?>
					<span class="the-author">Inviato da: <?php  the_author( );?> il <?php  the_date(); ?> </span>
				</span>

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
			'offset' => 1,
			)); 
		while ( $the_query->have_posts() ) : 
			$the_query->the_post();
		?>

		<a href="<?php echo get_permalink(); ?>">
			<article class="col-md-4 box lastnews"  id="latest-box-id-<?php the_ID(); ?>"><!-- 5 blocchi singoli delle news -->
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnails_rectangle', array( 'class' => 'img-responsive' ) ); }?>
				<span class="entry-date"><?php echo get_the_date(); ?></span>
				<span class="title-header" ><?php the_title(); ?></h4></span> 
				<span class="the-excerpt" ><?php echo last_news_excerpt()."[...]"; ?>
					<span class="the-author">Inviato da: <?php  the_author( );?> il <?php  the_date(); ?> </span>
				</span>

			</article>
		</a>
		<!-- item -->
		<?php 
		endwhile; 
		wp_reset_postdata();
		?>
	</span>
</div>







