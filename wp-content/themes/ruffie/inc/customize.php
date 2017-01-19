<?php
/**
	* Ruffie Customize
	*
	* Adds various theme options to...
	*
	* 
	* @package KniffTech
 	* @subpackage Ruffie
	* @since Ruffie 1.1
	*/
	function ruffie_curtomize_register( $wp_customize ){
		// Toggle site title
		$wp_customize->add_setting( 'display_site_title', array(
			'default'	=> true,
			'sanitize_callback' => 'ruffie_sanitize_checkbox'
		) );
	
		$wp_customize->add_control( 'display_site_title', array(
			'label'			=> __( 'Display Site Title', 'ruffie' ),
			'section'		=> 'title_tagline',
			'type'			=> 'checkbox',
		) );
		
		// Toggle site description
		$wp_customize->add_setting( 'display_tagline', array(
			'default'	=> true,
			'sanitize_callback' => 'ruffie_sanitize_checkbox'
		) );
	
		$wp_customize->add_control( 'display_tagline', array(
			'label'			=> __( 'Display Tagline', 'ruffie' ),
			'section'		=> 'title_tagline',
			'type'			=> 'checkbox',
		) );

		// Text color
		$wp_customize->add_setting( 'text_color', array(
			'default'	=> '#191919',
			'sanitize_callback' => 'sanitize_hex_color'
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color', array(
			'label'        => __( 'Text Color', 'ruffie' ),
			'section'    => 'colors',
			'settings'   => 'text_color',
		) ) );

		// Anchor text color
		$wp_customize->add_setting( 'link_color', array(
			'default'	=> '#191919',
			'sanitize_callback' => 'sanitize_hex_color'
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
			'label'        => __( 'Link Color', 'ruffie' ),
			'section'    => 'colors',
			'settings'   => 'link_color',
		) ) );

		// Site title color
		$wp_customize->add_setting( 'site_title_color', array(
			'default'	=> '#191919',
			'sanitize_callback' => 'sanitize_hex_color'
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_title_color', array(
			'label'        => __( 'Site Title Color', 'ruffie' ),
			'section'    => 'colors',
			'settings'   => 'site_title_color',
		) ) );

		// Site tagline color
		$wp_customize->add_setting( 'tagline_color', array(
			'default'	=> '#191919',
			'sanitize_callback' => 'sanitize_hex_color'
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tagline_color', array(
			'label'        => __( 'Tagline Color', 'ruffie' ),
			'section'    => 'colors',
			'settings'   => 'tagline_color',
		) ) );

		// Border color
		$wp_customize->add_setting( 'border_color', array(
			'default'	=> '#191919',
			'sanitize_callback' => 'sanitize_hex_color'
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_color', array(
			'label'        => __( 'Border Color', 'ruffie' ),
			'section'    => 'colors',
			'settings'   => 'border_color',
		) ) );

		// Entry meta section
		$wp_customize->add_section( 'entry_meta' , array(
			'title'      => __( 'Entry Metadata', 'ruffie' ),
			'priority'   => 80,
		) );

		// Entry meta author
		$wp_customize->add_setting( 'entry_meta_author', array(
			'default'	=> true,
			'sanitize_callback' => 'ruffie_sanitize_checkbox'
		) );
	
		$wp_customize->add_control( 'entry_meta_author', array(
			'label'			=> __('Display author', 'ruffie'),
			'section'		=> 'entry_meta',
			'type'			=> 'checkbox',
		) );

		// Entry meta date
		$wp_customize->add_setting( 'entry_meta_date', array(
			'default'	=> true,
			'sanitize_callback' => 'ruffie_sanitize_checkbox'
		) );
	
		$wp_customize->add_control( 'entry_meta_date', array(
			'label'			=> __('Display date posted', 'ruffie'),
			'section'		=> 'entry_meta',
			'type'			=> 'checkbox',
		) );

		// Entry meta comments
		$wp_customize->add_setting( 'entry_meta_comments', array(
			'default'	=> true,
			'sanitize_callback' => 'ruffie_sanitize_checkbox'
		) );
	
		$wp_customize->add_control( 'entry_meta_comments', array(
			'label'			=> __('Display comment count', 'ruffie'),
			'section'		=> 'entry_meta',
			'type'			=> 'checkbox',
		) );

		// Entry meta post format
		$wp_customize->add_setting( 'entry_meta_post_format', array( 
			'default' => true,
			'sanitize_callback' => 'ruffie_sanitize_checkbox' 
		) );
	
		$wp_customize->add_control( 'entry_meta_post_format', array(
			'label'			=> __('Display Post Format', 'ruffie'),
			'section'		=> 'entry_meta',
			'type'			=> 'checkbox'
		) );

		// Entry meta categories
		$wp_customize->add_setting( 'entry_meta_categories', array(
			'default'	=> true,
			'sanitize_callback' => 'ruffie_sanitize_checkbox'
		) );
	
		$wp_customize->add_control( 'entry_meta_categories', array(
			'label'			=> __('Display Categories', 'ruffie'),
			'section'		=> 'entry_meta',
			'type'			=> 'checkbox',
		) );

		// Entry meta tags
		$wp_customize->add_setting( 'entry_meta_tags', array(
			'default'	=> true,
			'sanitize_callback' => 'ruffie_sanitize_checkbox'
		) );
	
		$wp_customize->add_control( 'entry_meta_tags', array(
			'label'			=> __('Display Tags', 'ruffie'),
			'section'		=> 'entry_meta',
			'type'			=> 'checkbox',
		) );

		// author bio
		$wp_customize->add_setting( 'author_bio', array( 
			'default' => true,
			'sanitize_callback' => 'ruffie_sanitize_checkbox'
		) );
	
		$wp_customize->add_control( 'author_bio', array(
			'label'			=> __('Display Author Bio', 'ruffie'),
			'section'		=> 'entry_meta',
			'type'			=> 'checkbox'
		) );

		// Theme options
		$wp_customize->add_section( 'design_options' , array(
			'title'      => __( 'Theme options', 'ruffie' ),
			'priority'   => 90,
		) );

		// Display full content or summery/excerpt
		$wp_customize->add_setting( 'display_content', array(
			'default'	=> false,
			'sanitize_callback' => 'ruffie_sanitize_checkbox'
		) );
	
		$wp_customize->add_control( 'display_content', array(
			'label'			=> __('Display full content of posts on index pages', 'ruffie'),
			'section'		=> 'design_options',
			'type'			=> 'checkbox',
		) );

		// Display thumbnails on index pages
		$wp_customize->add_setting( 'thumbnail_index', array(
			'default'	=> true,
			'sanitize_callback' => 'ruffie_sanitize_checkbox'
		) );
	
		$wp_customize->add_control( 'thumbnail_index', array(
			'label'			=> __('Display thumbnails on index pages', 'ruffie'),
			'section'		=> 'design_options',
			'type'			=> 'checkbox',
		) );

		// Display thumbnails on content pages
		$wp_customize->add_setting( 'thumbnail_content', array(
			'default'	=> true,
			'sanitize_callback' => 'ruffie_sanitize_checkbox'
		) );
	
		$wp_customize->add_control( 'thumbnail_content', array(
			'label'			=> __('Display thumbnails on content pages', 'ruffie'),
			'section'		=> 'design_options',
			'type'			=> 'checkbox',
		) );

		// Display read more button
		$wp_customize->add_setting( 'read_more', array(
			'default'	=> true,
			'sanitize_callback' => 'ruffie_sanitize_checkbox'
		) );
	
		$wp_customize->add_control( 'read_more', array(
			'label'			=> __('Display read more button', 'ruffie'),
			'section'		=> 'design_options',
			'type'			=> 'checkbox',
		) );

		// Social icons
		$wp_customize->add_section( 'social_icons' , array(
			'title'      => __( 'Social Media Icons', 'ruffie' ),
			'priority'   => 50,
		) );

		// RSS link
		$wp_customize->add_setting( 'social_media_rss', array(
			'default'	=> false,
			'sanitize_callback' => 'ruffie_sanitize_checkbox'
		) );
	
		$wp_customize->add_control( 'social_media_rss', array(
			'label'			=> __('RSS Link', 'ruffie'),
			'section'		=> 'social_icons',
			'type'			=> 'checkbox',
		) );

		// Social icons
		global $ruffie_social_media_icons;

		foreach( $ruffie_social_media_icons as $service => $icon){
			$wp_customize->add_setting( 'social_media_'.strtolower($service), array(
				'default'	=> '',
				'sanitize_callback' => 'sanitize_text_field'
			) );
	
			$wp_customize->add_control( 'social_media_'.strtolower($service), array(
				'label'			=> sprintf( __('%1$s URL', 'ruffie'), $service ),
				'section'		=> 'social_icons',
				'type'			=> 'text',
			) );
		}

		// Footer section
		$wp_customize->add_section( 'footer' , array(
			'title'      => __( 'Footer', 'ruffie' ),
			'priority'   =>	120,
		) );

		// Change copyright text
		$wp_customize->add_setting( 'footer_text', array(
			'default'	=> get_bloginfo('name'),
			'sanitize_callback' => 'sanitize_text_field'
		) );

		$wp_customize->add_control( 'footer_text', array(
			'label'			=> __('Footer text', 'ruffie'),
			'section'		=> 'footer',
			'type'			=> 'text',
		) );

		// Toggle copyright icon
		$wp_customize->add_setting( 'footer_copyright', array(
			'default'	=> true,
			'sanitize_callback' => 'ruffie_sanitize_checkbox'
		) );
	
		$wp_customize->add_control( 'footer_copyright', array(
			'label'			=> __('Show Copyright Icon', 'ruffie'),
			'section'		=> 'footer',
			'type'			=> 'checkbox',
		) );

		// Toggle current year
		$wp_customize->add_setting( 'footer_year', array(
			'default'	=> true,
			'sanitize_callback' => 'ruffie_sanitize_checkbox'
		) );
	
		$wp_customize->add_control( 'footer_year', array(
			'label'			=> __('Show Current Year', 'ruffie'),
			'section'		=> 'footer',
			'type'			=> 'checkbox',
		) );

		// Advertise theme author
			$wp_customize->add_setting( 'footer_advert', array(
			'default'	=> true,
			'sanitize_callback' => 'ruffie_sanitize_checkbox'
		) );
	
		$wp_customize->add_control( 'footer_advert', array(
			'label'			=> __('Advertise Theme', 'ruffie'),
			'section'		=> 'footer',
			'type'			=> 'checkbox',
		) );

		// Scroll to top icon
		$wp_customize->add_setting( 'scrolltotop', array(
			'default'	=> true,
			'sanitize_callback' => 'ruffie_sanitize_checkbox'
		) );
	
		$wp_customize->add_control( 'scrolltotop', array(
			'label'			=> __('Scroll to top icon in footer', 'ruffie'),
			'section'		=> 'footer',
			'type'			=> 'checkbox',
		) );
	}
	add_action('customize_register', 'ruffie_curtomize_register');

	function ruffie_sanitize_checkbox( $input ) {
		// Boolean check 
		return ( ( isset( $input ) && true == $input ) ? true : false );
	}