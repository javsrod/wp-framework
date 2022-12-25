<?php

// Gutenberg Color Pickers
function gb_blocks_theme_suported_featurs() {
    add_theme_support( 'editor-color-palette', array(

        array(
            'name' => esc_attr__( 'Brand Purple', 'movita_child' ),
            'slug' => 'clr-1',
            'color' => '#83007e',
        ),
        array(
            'name' => esc_attr__( 'Brand Green', 'movita_child' ),
            'slug' => 'clr-2',
            'color' => '#62bb46',
        ),
        array(
            'name' => esc_attr__( 'Brand Gray', 'movita_child' ),
            'slug' => 'clr-3',
            'color' => '#7b7c8e',
        ),

        array(
            'name' => esc_attr__( 'Brand White', 'movita_child' ),
            'slug' => 'white',
            'color' => '#ffffff',
        ),

        array(
            'name' => esc_attr__( 'Brand White', 'movita_child' ),
            'slug' => 'black',
            'color' => '#000000',
        ),
    ) );
}
 
add_action( 'after_setup_theme', 'gb_blocks_theme_suported_featurs' );
