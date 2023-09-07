<?php
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