<?php
/**
 *  Remove Inner Blocks ACF HTML - <div class="acf-inner-blocks-container"></div>
 * 
 * @see https://www.advancedcustomfields.com/resources/whats-new-with-acf-blocks-in-acf-6/#block-versioning
 */

add_filter( 'acf/blocks/wrap_frontend_innerblocks', 'acf_should_wrap_innerblocks', 10, 2 );
function acf_should_wrap_innerblocks( $wrap, $name ) {
    if ( $name == 'acf/test-block' ) {
        return true;
    }
    return false;
}


/**
 *  Activate ACF Blocks Folder
 * 
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.0
 */

// Register Custom Blocks
add_action('acf/init', 'tbc_register_blocks');
function tbc_register_blocks() {

    // check function exists.
    if( function_exists('acf_register_block_type') ) {

        /**
        * JSON Includes
        */
        require get_template_directory() . '/blocks/register-blocks.php';

    }
}

?>
