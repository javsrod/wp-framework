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
        'clr-1'   => '#83007e',
        'clr-1-dark'   => '#45246c',
        'clr-2'   => '#62bb46',
        'clr-2-dark'   => '#62bb46',
        'clr-3'   => '#7b7c8e',
        'clr-3-light'   => '#f7f7f7',
    );

    // Block Editor Palette.
    $editor_color_palette = array(
        array(
            'name' => esc_attr__( 'Brand Purple', 'movita_child' ),
            'slug' => 'clr-1',
            'color' => $colors[ 'clr-1' ],
        ),

        array(
            'name' => esc_attr__( 'Brand Acai', 'movita_child' ),
            'slug' => 'clr-1-dark',
            'color' => $colors[ 'clr-1-dark' ],
        ),

        array(
            'name' => esc_attr__( 'Brand Green', 'movita_child' ),
            'slug' => 'clr-2',
            'color' => $colors[ 'clr-2' ],
        ),
        array(
            'name' => esc_attr__( 'Brand Gray', 'movita_child' ),
            'slug' => 'clr-3',
            'color' => $colors[ 'clr-3' ],
        ),

        array(
            'name' => esc_attr__( 'Brand Light Gray', 'movita_child' ),
            'slug' => 'clr-3-light',
            'color' => $colors[ 'clr-3-light' ],
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
    );

    add_theme_support( 'editor-color-palette', $editor_color_palette );

    add_theme_support(
        'editor-gradient-presets',
        array(
            array(
                'name'     => __( 'Clr 1 Grad', 'tabor' ),
                'gradient' => 'linear-gradient(60deg, ' . esc_attr( hex_to_rgb( $colors[ 'clr-1' ] ) ) . ' 0%, ' . hex_to_rgb( $colors[ 'clr-1-dark' ] ) . ' 100%)',
                'slug'     => 'clr-1',
            ),
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
