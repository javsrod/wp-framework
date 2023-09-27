<?php
/**
 * Register Sidebars & Custom Widget Areas.
 * 
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.0
 */

// Widget Areas
function wpt_create_widget( $name, $id, $description ) {

    register_sidebar(array(
        'name' => __( $name ),
        'id' => $id,
        'description' => __( $description ),
        'before_widget' => '<div id="%1$s" class="widget %2$s"xw>',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="module-heading">',
        'after_title' => '</h4>'
    ));

}

wpt_create_widget( 'Primary Sidebar', 'primary', 'Displays on the side of pages in the blog section' );
wpt_create_widget( 'Legal Sidebar', 'legal', 'Legal page template sidebar' );


// Search Widget Areas
function search_create_widget( $name, $id, $description ) {

    register_sidebar(array(
        'name' => __( $name ),
        'id' => $id,
        'description' => __( $description ),
        'before_widget' => '<div class="wpsl-search-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h1 class="wpsl-widget-heading" aria-hidden="true">',
        'after_title' => '</h1>'
    ));

}
search_create_widget( 'General Location Search Widget', 'wpsl_locations_seach_general', 'WPSL general Search widget area' );
