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
}

if ($facebook_miraforever_post == false) {
	$fbp = 496;
}
elseif ($facebook_miraforever_post == true)
{
	$fpd = 0;
}
?>



<h2 ><?php echo $title_box;?></h2>	
<div class="boxes-news "><!--blocco ultime news home page -->
	<span><?php 
		$the_query = new WP_Query(array(
			'cat' => $category,
			'posts_per_page' => $post_per_page,
			//'category_name' => $category,
			'category__not_in' => $fbp,
			'orderby' => $orderby,
			)); 
		while ( $the_query->have_posts() ) : 
			$the_query->the_post();
		?>
		<a href="<?php echo get_permalink(); ?>">
			<article class="box <?php echo $col ." ".$add_class ;?> " id="latest-box-id-<?php the_ID(); ?>">
				<?php
				if ( has_post_thumbnail() ) 
					{ the_post_thumbnail($thumbnail_type, array( 'class' => 'img-responsive ' ) );
			} 
			else {
				if ( $fpd == 0) {
					echo "<div class=\"col-md-12 $box_color\" style=\"min-height:144px\"></div>";	
				}
				echo "<img class=\"col-md-12 $box_color\" style=\"min-height:144px\"></img>";	

			}
			
			?>
			<span class="entry-date <?php echo $box_color ;?>"><?php echo get_the_date(); ?></span>
			<span class="title-header <?php echo $box_color ;?>" ><?php the_title(); ?></h4></span> 
			<span class="the-excerpt " >
				<?php 
				echo $my_excerpt();
				?>
				<br>
				<span class="the-author <?php echo $box_color ;?>">Inviato da: <?php  the_author( );?> </span>
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







