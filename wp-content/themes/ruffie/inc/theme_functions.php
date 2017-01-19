<?php
/**
 * Custom theme functions and filters
 *
 * @package KniffTech
 * @subpackage Ruffie
 * @since Ruffie 1.1.0
 */


/**
	* Social media icons
	*
	* @since Ruffie 1.1.0
	*/
$ruffie_social_media_icons = array(
	'Twitter'			=>	'fa-twitter',
	'Facebook'		=>	'fa-facebook',
	'Instagram'		=>	'fa-instagram',
	'Vine'				=>	'fa-vine',
	'SnapChat'		=>	'fa-snapchat-ghost',
	'LinkedIn'		=>	'fa-linkedin',
	'Google+'			=>	'fa-google-plus',
	'YouTube'			=>	'fa-youtube',
	'Twitch'			=>	'fa-twitch',
	'Vimeo'				=>	'fa-vimeo',
	'Pinterest'		=>	'fa-pinterest',
	'Reddit'			=>	'fa-reddit-alien',
	'Steam'				=>	'fa-steam',
	'Flickr'			=>	'fa-flickr',
	'Tumblr'			=>	'fa-tumblr',
	'Spotify'			=>	'fa-spotify',
	'Soundcloud'	=>	'fa-soundcloud',
	'MixCloud'		=>	'fa-mixcloud',
	'GitHub'			=>	'fa-github',
	'BitBucket'		=>	'fa-bitbucket',
	'Behance'			=>	'fa-behance',
	'LastFM'			=>	'fa-lastfm',
	'DeviantArt'	=>	'fa-deviantart',
	'BitCoin'			=>	'fa-btc',
);

function ruffie_any_social_icons(){
	global $ruffie_social_media_icons;

	if(get_theme_mod( 'social_media_rss' )) return true;

	foreach( $ruffie_social_media_icons as $service => $icon ){
		if( get_theme_mod( 'social_media_'.strtolower($service) ) ) return true;
	}

	return false;
}

function ruffie_social_media(){
	if( !ruffie_any_social_icons() ) return;

	global $ruffie_social_media_icons; ?>
	
	<ul class="ruffie-social-media-links">
		<?php if(get_theme_mod( 'social_media_rss' )): ?>
			<li>
				<a title="<?php esc_attr_e('RSS Feed', 'ruffie'); ?>" href="<?php bloginfo('rss2_url'); ?>" target="_blank">
					<i class="fa fa-rss"></i>
				</a>
			</li>
		<?php endif;

		foreach( $ruffie_social_media_icons as $service => $icon ):
			if( get_theme_mod( 'social_media_'.strtolower($service) ) ): ?>
				<li>
					<a title="<?php echo esc_attr($service); ?>" href="<?php echo esc_url( get_theme_mod( 'social_media_'.strtolower($service) ) ); ?>" target="_blank">
						<i class="fa <?php echo esc_attr( $icon ); ?>"></i>
					</a>
				</li>
			<?php endif;
		endforeach; ?>
	</ul>
<?php }

/**
	* Count footer widget areas
	*
	* @since Ruffie 1.3.0
	*/
function ruffie_footer_widget_area_counter(){
	$areas = 0;

	if( is_active_sidebar( 'footer-widget-area-one' ) ) $areas++;
	if( is_active_sidebar( 'footer-widget-area-two' ) ) $areas++;
	if( is_active_sidebar( 'footer-widget-area-three' ) ) $areas++;
	if( is_active_sidebar( 'footer-widget-area-four' ) ) $areas++;

	return $areas;
} 