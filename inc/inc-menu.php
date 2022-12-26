<?php

// Menus
    add_theme_support( 'menus' );

    function register_theme_menus() {

        register_nav_menus(
            array(
                'primary-menu' => _( 'Primary Menu'),
                'secondary-menu' => _( 'Secondary Menu'),
                'blocks-custom' => _( 'Blocks Custom'),
                'blocks-default' => _( 'Blocks Default'),
                'framework-menu' => _( 'Framework Menu'),
            )

        );
    }

    add_action( 'init', 'register_theme_menus' );
