<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package miraforever
 */ 
?>


<footer class="container-fluid footer" >
	<div class="container">

		<div class="row" >
			<div class="col-md-3"><div id="secondary" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'footer_one' ); ?>
				</div><!-- #secondary -->
			</div>
			<div class="col-md-3"><div id="secondary" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'footer_two' ); ?>
				</div><!-- #secondary -->
			</div>
			<div class="col-md-3"><div id="secondary" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'footer_three' ); ?>
				</div><!-- #secondary -->
			</div>
			<div class="col-md-3"><div id="secondary" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'footer_four' ); ?>
				</div><!-- #secondary -->
			</div>
		</div>
	</div>

</footer>







</div><!-- #page -->

<?php wp_footer(); ?>



<script type="text/javascript">

	if ( $('.carousel-inner').length > 0)
	{
		$('.carousel-inner > div.item').first().addClass("active");
	}
	$('#carousel-header').carousel();

</script>


<script type="text/javascript">

	if ( $('.carousel-inner').length > 0)
	{
		$('.carousel-inner > div.item').first().addClass("active");
	}
	$('#carousel-attrazioni').carousel();

</script>

<!-- primo elemento lastnews grande-->
<script type="text/javascript">

	if ( $('.home-page-last-news').length > 0)
	{
		$('.home-page-last-news > article.lastnews-box').first().addClass("active");
	}

</script>

<!-- MEGAMENU fisso in alto durante lo scrolling -->
<script type="text/javascript">
	$(document).ready(function() {
		var menutopfixed = $("#menu-top-fixed");
		var posizione = menutopfixed.position();
		var siteheaderbackgroud = $(".site-header nav.top-bar");
		

  // intercettiamo qui l'evento "scroll"                 
  $(window).scroll(function() {
    // "$(window).scrollTop()" ci dice di quanto abbiamo scrollato la pagina
    if ($(window).scrollTop() >= posizione.top  ) {
      // abbiamo scrollato oltre il div, dobbiamo bloccarlo
      menutopfixed.addClass("mega-menu-top-fixed");
      siteheaderbackgroud.addClass("mega-menu-top-fixed-background");

  }else {
  	menutopfixed.removeClass("mega-menu-top-fixed"); 
  	siteheaderbackgroud.removeClass("mega-menu-top-fixed-background");

  }
});
});</script>






	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('#mega-menu-search-id').hide();
			jQuery('a#slick-slidetoggle').click(function() {
				jQuery('#mega-menu-search-id').fadeToggle( "fast", "linear" )
				return false;
			});
		});
	</script>

<script type="text/javascript">
$(document).mouseup(function (e)
{
var container = $("#mega-menu-search-id");

if (!container.is(e.target) // if the target of the click isn't the container...
&& container.has(e.target).length === 0) // ... nor a descendant of the container
{
container.hide();
}
});
</script>
	<script>

		$(function () {

			var h = $('.carousel-caption').height();

			$('.carousel-caption').height(h);

			$('.carousel-caption').addClass("vCenter");

		});

	</script>



	<script type="text/javascript"  async defer>
// aggiunta icon nel megamenu
$( "#mega-menu-item-14659 > a" ).last().addClass( "dsfasdfdsfads" );

</script>




</body>
</html>
