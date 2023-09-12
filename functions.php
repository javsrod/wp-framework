<?php
/**
 * The functions.php file is where you add unique features to 
 * your WordPress theme. It can be used to hook into the core 
 * functions of WordPress to make your theme more 
 * modular, extensible, and functional.
 * 
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.0
 */

// ACF Blocks
require get_template_directory() . '/inc/inc-acf.php';

// Blog & Posts
require get_template_directory() . '/inc/inc-blog.php';

// WP Head and other cleanup functions
require_once(get_template_directory().'/inc/inc-cleanup.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/inc/inc-comments.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/inc/inc-enqueue-scripts.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/inc/login.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/inc/inc-menu.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/inc/inc-pagination.php');

// Theme editor options
require_once(get_template_directory().'/inc/inc-theme-editor.php');

// Theme support options
require_once(get_template_directory().'/inc/inc-theme-support.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/inc/inc-widgets.php');

// WPSL Store Locator Plugin
require_once(get_template_directory().'/inc/inc-wpsl.php');


// short code to display the wp store from opening-soon category
add_shortcode( 'wpsl_opening_soon', 'wpsl_opening_soon' );
function wpsl_opening_soon(){
    ob_start();
    $args = array(
        'post_type' => 'wpsl_stores',
        'tax_query' => array(
            array(
                'taxonomy' => 'wpsl_store_category',
                'field' => 'slug',
                'terms' => 'opening-soon'
            )
        )
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ):
        ?>
 <div class="spb-feat">
    <div class="gcw sph-edge spb">
        <h2 class="h4 text-center reveal-repeat-bottom">Locations opening soon!</h2>
        <div class="grid-r-3 grid-gap row-gap-rim">
<?php
        while($query->have_posts()):
            $query->the_post();
            $post_id = get_the_ID();
            $post_title = get_the_title();
            $post_content = get_the_content();
            // post meta
            $address = get_post_meta( $post_id, 'wpsl_address', true );
            $address2 = get_post_meta( $post_id, 'wpsl_address2', true ) ? ", ". get_post_meta( $post_id, 'wpsl_address2', true ) : '';
            $city = get_post_meta( $post_id, 'wpsl_city', true ) ? get_post_meta( $post_id, 'wpsl_city', true )  : '';
            $state = get_post_meta( $post_id, 'wpsl_state', true ) ? ", ".get_post_meta( $post_id, 'wpsl_state', true )  : '';
            $zip = get_post_meta( $post_id, 'wpsl_zip', true ) ? " ".get_post_meta( $post_id, 'wpsl_zip', true )  : '';


    ?>  <div class="location-post-item m-box reveal-repeat-bottom">
            <div class="smb0">
                <p>
                    <strong><?php echo $post_title; ?></strong>
                    <span class="wpsl-street"><?php echo $address . $address2; ?></span>
                    <span><?php echo $city.$state.$zip ;?></span>
                </p>
            </div>
        </div>
    <?php
        endwhile;
        wp_reset_postdata();
    ?>
        </div><!-- .grid-x -->
</div>
</div>
<?php
    endif;
    return ob_get_clean();
}


// redirect users to home page when they land on cpt wpsl_stores with store categories wpsl_store_category "Opening Soon"
add_action( 'template_redirect', 'wpsl_opening_soon_redirect' );
function wpsl_opening_soon_redirect() {
    if ( is_singular( 'wpsl_stores' ) ) {
        $terms = get_the_terms( get_the_ID(), 'wpsl_store_category' );
        if ( $terms && ! is_wp_error( $terms ) ) {
            $term_slugs = array();
            foreach ( $terms as $term ) {
                $term_slugs[] = $term->slug;
            }
            if ( in_array( 'opening-soon', $term_slugs ) ) {
                wp_redirect( home_url('/locations-order-online/') );
                exit;
            }
        }
    }
}

?>
