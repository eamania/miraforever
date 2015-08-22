<?php
/**
 * @package miraforever
 */
?>



<div id="carousel-header" class="carousel  carousel-fade slide" data-ride="carousel">
	<!-- Indicators --> 
	<ol class="carousel-indicators">
		<li data-target="#carousel-header" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-header" data-slide-to="1"></li>
		<li data-target="#carousel-header" data-slide-to="2"></li>
		<li data-target="#carousel-header" data-slide-to="3"></li>
		<li data-target="#carousel-header" data-slide-to="4"></li>
		<li data-target="#carousel-header" data-slide-to="5"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<?php 
		$the_query = new WP_Query(array(
			'posts_per_page' => 6,
			'category_name' => "featured" ,
			)); 
		while ( $the_query->have_posts() ) : 
			$the_query->the_post();
		?>
		<div class="item">
			<?php the_post_thumbnail('thumbnails_header_background' ,array('class' => "effect-img-slideshow"));?>
			<div class="container">
				<div class="row ">
					<div class="col-md-10 col-lg-8 carousel-caption">
						<div class="col-md-3 col-lg-5 tierre ">
							<div class="thumbnail-header table-cell "><?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnails_header', array( 'class' => 'thumbnail img-responsive, img-header-shadow' ) ); }?></div>
						</div>
						<div class="col-md-9 col-lg-7 tierre" >
							<div class="centertext " >
								<div class="title-header " ><?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?></h4></div> 
								<div class="excerpt-header "><p><?php echo header_excerpt()."[...]";?></p></div>
								<div class="entry-meta">
									<?php miraforever_posted_on(); ?>
								</div><!-- .entry-meta -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- item -->
		<?php 
		endwhile; 
		wp_reset_postdata();
		?>
	</div>
	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-header" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-header" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>

</div><!--carousel header-->
