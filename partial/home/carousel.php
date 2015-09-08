<?php
/**
 * @package miraforever
 */

?>

<div id="<?php echo $id_carousel; ?>" class="attrazioni-display carousel-div" style="background-image: url(<?php echo $background_image_carousel;?>); "  >
	<div class="container">
		<div class="row">
			<h1><?php echo $title_carousel;?></h1>
		</div>
		<div class="row">
			<span id="content_box " class="carousell-box"><?php


				$box_post = get_post($post_text_id);
				echo apply_filters( 'the_content', $box_post->post_content ); 
				?>
			</span> 
		</div>


		<div class="row">
			<div id="" class="owl-carousel owl-theme <?php echo $id_carousel;?>   boxes-news background-carousel">
				<?php 
				$the_query = new WP_Query(array(
					'posts_per_page' => 36,
				//'category_name' => $category_name_carousel,
					'post_type' => "$id_carousel",
					)); 
				while ( $the_query->have_posts() ) : 
					$the_query->the_post();
				?>
				<div class="item">
					<?php
					$col = "col-md-12";

					?>
					<a href="<?php echo get_permalink(); ?>">
						<article class="box <?php echo $col ." ".$add_class ;?> " id="latest-box-id-<?php the_ID(); ?>">
							<?php
							if ( has_post_thumbnail() ) 
								{ the_post_thumbnail($thumbnail_type, array( 'class' => 'img-responsive ' ) );
						} 
						else {echo "<img src=\"http://localhost/miraforever/logo-cl.png\">";}

						?>
						<span class="entry-date <?php echo $box_color ;?>">
							<?php 

							if ($id_carousel == "attrazioni") {
								echo wpdocs_custom_taxonomies_terms_links(); 
							}
							elseif($id_carousel == "spettacoli"){
								echo "spettacolo";
							}

							?>	</span>
							<span class="title-header <?php echo $box_color ;?>" ><?php the_title(); ?></h4></span> 
							<span class="the-excerpt " >
								<?php 
								echo $my_excerpt();
								?>
								<br>
								<span class="the-author <?php echo $box_color ;?>"><?php 

									if ($id_carousel == "attrazioni") {
										echo wpdocs_custom_taxonomies_terms_links(); 
									}
									elseif($id_carousel == "spettacoli"){
										echo "spettacolo";
									}

									?></span>
								</span>
							</article>

						</a>

					</div>

					<?php 
					endwhile; 
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>

		<!--http://www.jqueryrain.com/?f4PPfYg3-->
		<script type="text/javascript">  

			$('.<?php echo $id_carousel;?>').owlCarousel({
				loop:true,
				navigation:true,
				lazyLoad:true,
				items:4,
				navigationText:["<i class=\"glyphicon glyphicon-chevron-left owl-vertical-center-button\"></i>", "<i class=\"glyphicon glyphicon-chevron-right owl-vertical-center-button\"></i>"],
			})</script>


			<script type="text/javascript">
				$(document).ready(function() {
					var <?php echo $id_carousel ;?> = $("#<?php echo $id_carousel;?>");
					var height = $(window).height();
					var mouseposition = <?php echo $id_carousel ;?>.position();
					$(window).scroll(function() {
						if ($(window).scrollTop() >= mouseposition.top-height) {
							<?php echo $id_carousel;?>.addClass("attrazioni-display-yes");
						} 
					});
				});</script>

			</div>

<!-- http://owlgraphic.com/owlcarousel/ -->