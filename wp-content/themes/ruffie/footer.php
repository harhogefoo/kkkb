<?php
/**
 * Template for displaying the footer
 *
 * @package KniffTech
 * @subpackage Ruffie
 * @since Ruffie 1.0
 */
?>
	<footer class="site-footer">
		<?php get_sidebar('footer'); ?>
		
		<?php if ( has_nav_menu( 'footer' ) ):
			wp_nav_menu( array(
				'theme_location' => 'footer',
				'menu_class'     => 'footer-menu',
				'depth'					 =>	'1',
				'container_id'	 => 'footer-menu-container'
			) );
		endif; ?>
		
		<div class="footer-information">
			<span>
				<?php echo esc_html( get_theme_mod( 'footer_text', get_bloginfo('name') ) ); ?> 
				<?php if( get_theme_mod( 'footer_copyright', true ) ): ?>&copy;<?php endif; ?> 
				<?php if( get_theme_mod( 'footer_year', true) ): echo date_i18n(__("Y", "ruffie")); endif; ?> 
			</span>
			
			<?php if( get_theme_mod( 'footer_advert', true) ): ?>
				<span>
					<?php
						$ruffie_theme_data = wp_get_theme();

						printf( __( 'Theme: <a href="%2$s">%1$s</a>', 'ruffie' ),
							$ruffie_theme_data['Name'],
							esc_url( $ruffie_theme_data->get( 'ThemeURI' ) )
						);
					?>
				</span>
			<?php endif; ?>
		</div>

		<?php if ( get_theme_mod( 'scrolltotop', true ) ) { ?>
			<a class="scroll-to-top" href="#"><i class="fa fa-angle-up"></i></a>
		<?php } ?>

	</footer>

</div> <!-- .site-wrapper -->

<?php wp_footer(); ?>

</body>
</html>