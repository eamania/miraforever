<?php 


if ($box_per_row == 4) {
	$col = "col-md-3";
}
elseif ($box_per_row == 3) {
	$col = "col-md-4";
}
elseif ($box_per_row == 2) {
	$col = "col-md-6";
}
elseif ($box_per_row == 1) {
	$col = "col-md-12";
}
else {
}?>


<div class="col-md-6">
	<h2><?php echo $category;?></h2>	
	<div class="boxes-news"><!--blocco ultime news home page -->
		<div class="col-md-12">
			<span><?php 
				$the_query = new WP_Query(array(
					'posts_per_page' => 1,
					'category_name' => $category,
					)); 
				while ( $the_query->have_posts() ) : 
					$the_query->the_post();
				?>
				<a href="<?php echo get_permalink(); ?>">
					<article class="box col-md-12" id="latest-box-id-<?php the_ID(); ?>">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail($thumbnail_type, array( 'class' => 'img-responsive ' ) ); }?>
						<span class="entry-date"><?php echo get_the_date(); ?></span>
						<span class="title-header" ><?php the_title(); ?></h4></span> 
						<span class="the-excerpt" ><?php echo novelty_excerpt()."[...]"; ?>
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

			<span style="background:red;">
				<?php 
				$the_query = new WP_Query(array(
					'posts_per_page' => 4,
					'category_name' => $category,
					)); 
				while ( $the_query->have_posts() ) : 
					$the_query->the_post();
				?>
				<div class="row">
					<a href="<?php echo get_permalink(); ?>">
						<article class="col-md-10 news-box-down" id="latest-box-id-<?php the_ID(); ?>">
							<span class="col-md-3"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(thumbnails_rectangle_big , array( 'class' => 'img-responsive ' ) ); }?></span>
							<span class="col-md-9" ><?php the_title(); ?></h4></span> 
						</article>
					</a>
				</div>
				<!-- item -->
				<?php 
				endwhile; 
				wp_reset_postdata();
				?>

			</span>
		</div>
	</div>
</div>







