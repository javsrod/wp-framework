<?php
/**
 *  Register JS, CSS & Backend CSS
 *  FONTS & FONT ICONS scripts - are dded in Header via: /template-parts/head-tag.php
 * 
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.0
 */

////////////////////////////////////////
// MAIN THEME CSS & JS
////////////////////////////////////////
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    // Adding scripts file in the header
    wp_enqueue_script( 'header_plugins_js', get_template_directory_uri() . '/assets/scripts/header_plugins.js', array( ), filemtime(get_template_directory() . '/assets/scripts'), false );

    // Adding scripts file in the footer
    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/scripts/main.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts'), true );
       
    // Register main stylesheet
    // wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('styles', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);

}
add_action('wp_enqueue_scripts', 'site_scripts', 999);

////////////////////////////////////////
// Enqueue GUTENBERG CSS
////////////////////////////////////////
add_action( 'enqueue_block_editor_assets', 'tbc_editor_styles' );

function tbc_editor_styles() {
    /* Enqueue theme CSS in the Editor only */
    wp_enqueue_style('tbc-gb-editor-css', get_template_directory_uri() . '/css/style-editor.css', [ 'wp-edit-blocks' ], filemtime(get_template_directory() . '/css/style-editor.css'), false);
}