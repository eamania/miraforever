<?php 
include_once get_template_directory() . '/inc/rownumber.php';
?>

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
			<a href="">
				<article class="box novelty <?php echo $col;?>" id="latest-box-id-<?php the_ID(); ?>">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail($thumbnail_type, array( 'class' => 'img-responsive' ) ); }?>
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
</div>







