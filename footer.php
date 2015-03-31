<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package miraforever
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
		<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'miraforever' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'miraforever' ), 'WordPress' ); ?></a>
		<span class="sep"> | </span>
		<?php printf( __( 'Theme: %1$s by %2$s.', 'miraforever' ), 'miraforever', '<a href="http://underscores.me/" rel="designer">Andrea Vignando</a>' ); ?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">

if ( $('.carousel-inner').length > 0)
{
$('.carousel-inner > div.item').first().addClass("active");
}
$('#carousel-header').carousel();

</script>
<!-- MEGAMENU fisso in alto durante lo scrolling -->
<script type="text/javascript">
$(document).ready(function() {
  var menutopfixed = $("#menu-top-fixed");
  var posizione = menutopfixed.position();

  // intercettiamo qui l'evento "scroll"                 
  $(window).scroll(function() {
    // "$(window).scrollTop()" ci dice di quanto abbiamo scrollato la pagina
    if ($(window).scrollTop() >= posizione.top) {
      // abbiamo scrollato oltre il div, dobbiamo bloccarlo
      menutopfixed.addClass("mega-menu-top-fixed");
    } else {
      // abbiamo scrollato verso l'alto, sopra il div, possiamo sbloccarlo
      menu.removeClass("mega-menu-top-fixed"); 
    }
  });
});</script>
</body>
</html>
