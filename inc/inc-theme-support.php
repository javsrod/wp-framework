<?php
/**
 * inc/theme-support.php
 */


function joints_theme_support() {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */

	// Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

	/*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );


    // Menus
    add_theme_support( 'menus' );

    // Default thumbnail size
    set_post_thumbnail_size(125, 125, true);
    add_image_size( 'gallery-thumb', 300, 450, true ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Add support for responsive embeds.
    add_theme_support( 'responsive-embeds' );

    // Add support for custom background color and image
    add_theme_support( "custom-background" );


    /**
     * Gutenberg Support
     *
     */

    // Add support for core block visual styles.
    add_theme_support( 'wp-block-styles' );

    // Add support for editor styles
    add_theme_support( 'editor-styles' );

    // Add support for full and wide align images.
    // add_theme_support( 'align-wide' );

    // Remove Gutenberg layout Styles
    add_theme_support( 'disable-layout-styles' );


    /**
    * Woocommerce Suport
    *
    */
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );


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
	$GLOBALS['content_width'] = apply_filters( 'joints_theme_support', 2560 );

} /* end theme support */

add_action( 'after_setup_theme', 'joints_theme_support' );



/* ACF Image scrset max width */
add_filter( 'max_srcset_image_width', 'awesome_acf_max_srcset_image_width', 10 , 2 );

// set the max image width
function awesome_acf_max_srcset_image_width() {
    return 2560;
}

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
