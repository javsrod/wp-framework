<?php
/**
 *  Register theme menus.
 * 
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.0
 */

function register_theme_menus() {

    register_nav_menus(
        array(
            'primary-menu' => _( 'Primary Menu'),
            'mobile-menu' => _( 'Mobile Menu'),
            'footer-menu' => _( 'Footer Menu'),
            'legal-menu' => _( 'Legal Menu'),
        )

    );
}

add_action( 'init', 'register_theme_menus' );