<?php 
/** 
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */         
    

// Theme support options
require_once(get_template_directory().'/inc/theme-support.php'); 

// Gutenberg Theme support Options
require_once(get_template_directory().'/inc/theme-gutenberg.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/inc/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/inc/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/inc/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/inc/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/inc/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
 require_once(get_template_directory().'/inc/page-navi.php'); 

// Remove Emoji Support
require_once(get_template_directory().'/inc/disable-emoji.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/inc/related-posts.php'); 

// Customize the WordPress login menu
// require_once(get_template_directory().'/inc/login.php'); 

// Modify Wordpress Posts & Loops
require_once(get_template_directory().'/inc/post_modifications.php'); 


// Advanced Custom Fields
require_once(get_template_directory().'/inc/acf.php'); 

// ACF Blocks
require get_template_directory() . '/inc/acf-blocks.php';

// // WooCommerce Hooks & Filters
// require_once(get_template_directory().'/inc/non_joints/woocommerce.php'); 


?>
