<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Technacysolutions
 * @since Technacysolutions 1.0
 */

if ( is_active_sidebar( 'footer-1' ) ) { ?>

	<aside class="widget-area">
		<?php dynamic_sidebar( 'footer-1' ); ?>
	</aside><!-- .widget-area -->

	<?php
}
