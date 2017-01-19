<?php
/**
 * Template for displaying a widget area and additional content in the footer
 *
 * @package KniffTech
 * @subpackage Ruffie
 * @since Ruffie 1.0
 */

if( !is_active_sidebar( 'footer-widget-area-one' )  &&
		!is_active_sidebar( 'footer-widget-area-two' )  &&
		!is_active_sidebar( 'footer-widget-area-three' )  &&
		!is_active_sidebar( 'footer-widget-area-four' ) 
){
	return false;
} ?>

<div class="footer-widget-areas-container">

	<?php if ( is_active_sidebar( 'footer-widget-area-one' ) ) : ?>
		<div class="footer-widget-area-one footer-widget-area sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'footer-widget-area-one' ); ?>
		</div><!-- .footer-widget-area-one .sidebar .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'footer-widget-area-two' ) ) : ?>
		<div class="footer-widget-area-two footer-widget-area sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'footer-widget-area-two' ); ?>
		</div><!-- .footer-widget-area-two .sidebar .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'footer-widget-area-three' ) ) : ?>
		<div class="footer-widget-area-three footer-widget-area sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'footer-widget-area-three' ); ?>
		</div><!-- .footer-widget-area-three .sidebar .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'footer-widget-area-four' ) ) : ?>
		<div class="footer-widget-area-four footer-widget-area sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'footer-widget-area-four' ); ?>
		</div><!-- .footer-widget-area-four .sidebar .widget-area -->
	<?php endif; ?>

</div>