<?php
/**
 * Template for displaying a widget area and additional content
 *
 * @package KniffTech
 * @subpackage Ruffie
 * @since Ruffie 1.0
 */

if ( is_active_sidebar( 'left-sidebar-widget-area' )  ) : ?>
	<aside class="left-sidebar-widget-area sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'left-sidebar-widget-area' ); ?>
	</aside><!-- .left-sidebar-widget-area .sidebar .widget-area -->
<?php endif; ?>