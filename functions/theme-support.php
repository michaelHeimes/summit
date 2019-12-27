<?php
	
// Adding WP Functions & Theme Support
function joints_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	
	// Default thumbnail size
	set_post_thumbnail_size(125, 125, true);
	
	// Custom image sizes
	add_image_size( 'hero', 1920, 1226, true );
	add_image_size( 'cta-w-button', 1920, 583, true );
	add_image_size( 'fw-image', 1920, 1920, true );
	add_image_size( 'quote-image', 680, 1000, true );

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );
	
	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );
	
	// Add HTML5 Support
	add_theme_support( 'html5', 
	         array( 
	         	'comment-list', 
	         	'comment-form', 
	         	'search-form', 
	         ) 
	);
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );
	
	// Add ACF Options
	function register_acf_options_pages() {

	    // Check function exists.
	    if( !function_exists('acf_add_options_page') )
	        return;
	
	    // register options page.
	    $option_page = acf_add_options_page(array(
	        'page_title'    => __('Theme General Settings'),
	        'menu_title'    => __('Theme Settings'),
	        'menu_slug'     => 'theme-general-settings',
	        'capability'    => 'edit_posts',
	        'redirect'      => false
	    ));
	}

	// Hook into acf initialization.
	add_action('acf/init', 'register_acf_options_pages');
	
	// Adding post format support
	 add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	); 
	
	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	$GLOBALS['content_width'] = apply_filters( 'joints_theme_support', 1200 );	
	
} /* end theme support */

add_action( 'after_setup_theme', 'joints_theme_support' );