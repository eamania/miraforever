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
</body>
</html>
