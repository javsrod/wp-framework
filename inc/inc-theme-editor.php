<?php
/**
 *  Theme Editor
 * 
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.0
 */


/**
 * Block Editor Settings.
 * Add custom colors and gradients to the editor.
 */
function tabor_add_colors_and_gradients() {

    $colors = array(
        'clr-1'   => '#79127d',
        'clr-1-light'   => '#cc99cc',
        'clr-1-dark'   => '#4d0860',
        
        'clr-2'   => '#7d7c8c',
        'clr-2-light'   => '#f7f7f7',
        'clr-2-dark'   => '#3d3749',

        'clr-3'   => '#3200cd',
        'clr-3-light'   => '#d9cdff',
        'clr-3-dark'   => '#1f0081',

        'clr-4'   => '#c8348e',
        'clr-4-light'   => '#f2cee4',
        'clr-4-dark'   => '#8b2463',

    );

    // Block Editor Palette.
    $editor_color_palette = array(

        // Color 1
        array(
            'name' => esc_attr__( 'Color 1', '4eleven' ),
            'slug' => 'clr-1',
            'color' => $colors[ 'clr-1' ],
        ),

        array(
            'name' => esc_attr__( 'Color 1 Light', '4eleven' ),
            'slug' => 'clr-1-light',
            'color' => $colors[ 'clr-1-light' ],
        ),

        array(
            'name' => esc_attr__( 'Color 1 Dark', '4eleven' ),
            'slug' => 'clr-1-dark',
            'color' => $colors[ 'clr-1-dark' ],
        ),



        // Color 2
        array(
            'name' => esc_attr__( 'Color 2', '4eleven' ),
            'slug' => 'clr-2',
            'color' => $colors[ 'clr-2' ],
        ),

        array(
            'name' => esc_attr__( 'Color 2 Light', '4eleven' ),
            'slug' => 'clr-2-light',
            'color' => $colors[ 'clr-2-light' ],
        ),

        array(
            'name' => esc_attr__( 'Color 2 Dark', '4eleven' ),
            'slug' => 'clr-2-dark',
            'color' => $colors[ 'clr-2-dark' ],
        ),


        // Color 3
        array(
            'name' => esc_attr__( 'Color 3', '4eleven' ),
            'slug' => 'clr-3',
            'color' => $colors[ 'clr-3' ],
        ),

        array(
            'name' => esc_attr__( 'Color 3 Light', '4eleven' ),
            'slug' => 'clr-3-light',
            'color' => $colors[ 'clr-3-light' ],
        ),

        array(
            'name' => esc_attr__( 'Color 3 Dark', '4eleven' ),
            'slug' => 'clr-3-dark',
            'color' => $colors[ 'clr-3-dark' ],
        ),

        // Color 4
        array(
            'name' => esc_attr__( 'Color 4', '4eleven' ),
            'slug' => 'clr-4',
            'color' => $colors[ 'clr-4' ],
        ),

        array(
            'name' => esc_attr__( 'Color 4 Light', '4eleven' ),
            'slug' => 'clr-4-light',
            'color' => $colors[ 'clr-4-light' ],
        ),

        array(
            'name' => esc_attr__( 'Color 4 Dark', '4eleven' ),
            'slug' => 'clr-4-dark',
            'color' => $colors[ 'clr-4-dark' ],
        ),

        // Color White
        array(
            'name' => esc_attr__( 'Brand White', '4eleven' ),
            'slug' => 'white',
            'color' => '#ffffff',
        ),

        // Color Black
        array(
            'name' => esc_attr__( 'Brand White', '4eleven' ),
            'slug' => 'black',
            'color' => '#000000',
        ),
    );

    add_theme_support( 'editor-color-palette', $editor_color_palette );

    add_theme_support(
        'editor-gradient-presets',
        array(
            // array(
            //     'name'     => __( 'Clr 1 Grad', 'tabor' ),
            //     'gradient' => 'linear-gradient(60deg, ' . esc_attr( hex_to_rgb( $colors[ 'clr-1' ] ) ) . ' 0%, ' . hex_to_rgb( $colors[ 'clr-1-dark' ] ) . ' 100%)',
            //     'slug'     => 'clr-1',
            // ),
            // array(
            //     'name'     => __( 'Primary to Tertiary', 'tabor' ),
            //     'gradient' => 'linear-gradient(135deg, ' . esc_attr( hex_to_rgb( $colors[ 'primary' ] ) ) . ' 0%, ' . hex_to_rgb( $colors[ 'tertiary' ] ) . ' 100%)',
            //     'slug'     => 'primary-to-tertiary',
            // ),
            // array(
            //     'name'     => __( 'Secondary to Tertiary', 'tabor' ),
            //     'gradient' => 'linear-gradient(135deg, ' . esc_attr( hex_to_rgb( $colors[ 'secondary' ] ) ) . ' 0%, ' . hex_to_rgb( $colors[ 'tertiary' ] ) . ' 100%)',
            //     'slug'     => 'secondary-to-tertiary',
            // ),
        )
    );

}
add_action( 'after_setup_theme', 'tabor_add_colors_and_gradients' );











// 3. Convert HEX colors to RGB(A)

/**
 * Convert a 3 or 6-digit hexadecimal color to an associative RGB array.
 *
 * @param string $color The color in hex format.
 * @param bool   $opacity Whether to return the RGB color is opaque.
 *
 * @return string
 */
function hex_to_rgb( $color, $opacity = false ) {

    if ( empty( $color ) ) {
        return false;
    }

    if ( '#' === $color[0] ) {
        $color = substr( $color, 1 );
    }

    if ( 6 === strlen( $color ) ) {
        $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
    } elseif ( 3 === strlen( $color ) ) {
        $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
    } else {
        $default                 = \Go\Core\get_default_color_scheme();
        $avaliable_color_schemes = get_available_color_schemes();
        if ( isset( $avaliable_color_schemes[ $default ] ) && isset( $avaliable_color_schemes[ $default ]['primary'] ) ) {
            $default = $avaliable_color_schemes[ $default ]['primary'];
        }
        return $default;
    }

    $rgb = array_map( 'hexdec', $hex );

    if ( $opacity ) {
        if ( abs( $opacity ) > 1 ) {
            $opacity = 1.0;
        }

        $output = 'rgba(' . implode( ',', $rgb ) . ',' . $opacity . ')';

    } else {

        $output = 'rgb(' . implode( ',', $rgb ) . ')';

    }

    return esc_attr( $output );

}
