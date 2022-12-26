<?php
	
// Adding WP Functions & Theme Support
function joints_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	
	// Default thumbnail size
	set_post_thumbnail_size(125, 125, true);

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
	

	// Add Support for Woocommerce
	add_theme_support( 'woocommerce' );
	//add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );


	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	$GLOBALS['content_width'] = apply_filters( 'joints_theme_support', 1200 );	
	
    // Page Exerpt
    add_post_type_support( 'page', 'excerpt' );

} /* end theme support */


add_action( 'after_setup_theme', 'joints_theme_support' );




/**
 * Set max srcset image width to 1800px
 */
function remove_max_srcset_image_width( $max_width ) {
    $max_width = 2560;
    return $max_width;
}
add_filter( 'max_srcset_image_width', 'remove_max_srcset_image_width' );

// Posts

    function wpt_excerpt_length( $length ) {
        return 16;
    }
    add_filter( 'excerpt_length', 'wpt_excerpt_length', 999 );


// CPT UI Tags Support
function my_cptui_add_post_types_to_archives( $query ) {
    // We do not want unintended consequences.
    if ( is_admin() || ! $query->is_main_query() ) {
        return;    
    }

    if ( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
        $cptui_post_types = cptui_get_post_type_slugs();

        $query->set(
            'post_type',
            array_merge(
                array( 'post' ),
                $cptui_post_types
            )
        );
    }
}
add_filter( 'pre_get_posts', 'my_cptui_add_post_types_to_archives' ); 
