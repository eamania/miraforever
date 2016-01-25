<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package miraforever
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
	<?php

	if ( is_home() ) {
		dynamic_sidebar( 'home' );
	}
	elseif ( 'attrazioni' == get_post_type() ) {

		dynamic_sidebar( 'attrazioni' );
	}
	elseif ( 'attrazioni_rimosse' == get_post_type() ) {

		dynamic_sidebar( 'attrazioni' );
	}
	elseif ( 'spettacoli' == get_post_type() ) {

		dynamic_sidebar( 'spettacoli' );
	}

	else
	{
		dynamic_sidebar( 'sidebar-1' );

	}

	?>

</div><!-- #secondary -->
