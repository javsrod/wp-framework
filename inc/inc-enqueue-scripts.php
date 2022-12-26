<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    ////////////////////////////////////////
    // FONTS & FONT ICONS
    ////////////////////////////////////////

    // Added in Header via: /template-parts/nav-head.php

    ////////////////////////////////////////
    // MAIN THEME CSS & JS
    ////////////////////////////////////////

    // Adding scripts file in the header
    wp_enqueue_script( 'header_plugins_js', get_template_directory_uri() . '/assets/scripts/header_plugins.js', array( ), filemtime(get_template_directory() . '/assets/scripts'), false );

    // Adding scripts file in the footer
    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/scripts/main.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/main'), true );
       
    // Register main stylesheet
    wp_enqueue_style( 'style', get_stylesheet_uri() );

}
add_action('wp_enqueue_scripts', 'site_scripts', 999);

/**
 * Enqueue Gutenberg CSS
*/
add_action( 'enqueue_block_editor_assets', 'tbc_editor_styles' );

function tbc_editor_styles() {
    /* Enqueue theme CSS in the Editor only */
    wp_enqueue_style(  'tbc-gb-editor-css', get_stylesheet_directory_uri() . '/css/style-editor.css', [ 'wp-edit-blocks' ] );
}
