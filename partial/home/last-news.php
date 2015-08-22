<h2>Ultime Notizie</h2>	

<div class="boxes-news"><!--blocco ultime news home page -->
	<span><?php 
		$the_query = new WP_Query(array(
			'posts_per_page' => 1,
			'category__not_in' => 496,
			)); 
		while ( $the_query->have_posts() ) : 
			$the_query->the_post();
		?>
		<a href="<?php echo get_permalink(); ?>">

			<article class="col-md-4 box lastnews big" id="latest-box-id-<?php the_ID(); ?>"><!-- 5 blocchi singoli delle news -->
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnails_square', array( 'class' => 'img-responsive' ) ); }?>
				<span class="entry-date <?php echo $box_color ;?>"><?php echo get_the_date(); ?></span>
				<span class="title-header <?php echo $box_color ;?>" ><?php the_title(); ?></h4></span> 
				<span class="the-excerpt" ><?php echo the_excerpt()."[...]"; ?>
					<br><span class="the-author <?php echo $box_color;?>">Inviato da: <?php  the_author( );?> </span>
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
			'category__not_in' => 496,
			)); 
		while ( $the_query->have_posts() ) : 
			$the_query->the_post();
		?>

		<a href="<?php echo get_permalink(); ?>">
			<article class="col-md-4 box lastnews"  id="latest-box-id-<?php the_ID(); ?>"><!-- 5 blocchi singoli delle news -->
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnails_rectangle', array( 'class' => 'img-responsive' ) ); }?>
				<span class="entry-date <?php echo $box_color ;?>"><?php echo get_the_date(); ?></span>
				<span class="title-header <?php echo $box_color ;?>" ><?php the_title(); ?></h4></span> 
				<span class="the-excerpt" ><?php echo last_news_excerpt()."[...]"; ?>
					<br><span class="the-author <?php echo $box_color;?>">Inviato da: <?php  the_author( );?> </span>
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







