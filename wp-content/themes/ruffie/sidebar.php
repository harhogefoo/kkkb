<?php
/**
 * Template for displaying a widget area and additional content
 *
 * @package KniffTech
 * @subpackage Ruffie
 * @since Ruffie 1.0
 */

if ( is_active_sidebar( 'right-sidebar-widget-area' )  ) : ?>
	<aside class="right-sidebar-widget-area sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'right-sidebar-widget-area' ); ?>
	</aside><!-- .right-sidebar-widget-area .sidebar .widget-area -->
<?php endif; ?>