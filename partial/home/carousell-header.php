<?php
/**
 * @package miraforever
 */
?>



<div id="carousel-header" class="carousel  carousel-fade slide" data-ride="carousel"  >
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
			<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnails_article_big', false); ?>

			<div class="item">

				<?php the_post_thumbnail('thumbnails_header_background' ,array('class' => "effect-img-slideshow "));?>


				<div class="article-center-header " >
					<div class="container b" style="background-color: rgba(0, 0, 0, 0.75); color: white; padding: 20px; ">
						<div class="row article-center-header-trans">
							<div class="col-lg-5 col-md-4" >
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnails_header', array( 'class' => 'thumbnail img-responsive, img-header-shadow img-big' ) ); }?>
							</div>
							<div class="col-lg-7 col-md-8" >
								<div class="title-header"> <?php the_title( sprintf( '<h1 class="entry-title " style="margin-top: 0;"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?></div>
								<div class="article-header-text">
									<?php echo header_excerpt(); ?>
								</div>

								<div class="entry-meta" style="margin-top: 20px; text-align: right;">
									<?php miraforever_posted_on(); ?>
								</div><!-- .entry-meta -->
							</div>

						</div>
						<div class="row">
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
