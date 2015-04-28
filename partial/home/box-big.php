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

<div class="col-md-12">
	<h2><?php echo $category;?></h2>	
	<div class="boxes-news col-md-12"><!--blocco ultime news home page -->
		<span><?php 
			$the_query = new WP_Query(array(
				'posts_per_page' => $post_per_page,
				'category_name' => $category,
				)); 
			while ( $the_query->have_posts() ) : 
				$the_query->the_post();
			?>
			<a href="<?php echo get_permalink(); ?>">
				<article class="box <?php echo $col;?>" id="latest-box-id-<?php the_ID(); ?>">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail($thumbnail_type, array( 'class' => 'img-responsive ' ) ); }?>
					<span class="entry-date"><?php echo get_the_date(); ?></span>
					<span class="title-header" ><?php the_title(); ?></h4></span> 
					<span class="the-excerpt" >
						<?php echo novelty_excerpt(); ?>
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
</div>







