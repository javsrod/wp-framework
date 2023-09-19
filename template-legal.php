<?php
/**
 * 
 * Template Name: Legal Pages
 * 
 * Generic template for legal pages
 *
 *
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.1
 */

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="sph spt spb-feat">        
        <div class="gcw gss--3-1 grid-gap legal-page ">
            
            <div class="spb">
                <h1><?php the_title( ); ?></h1>
                <div class="legal-content spt">
                    <?php the_content( ); ?>
                </div>
            </div>

            <aside class="sticky-parent">

                <div class="sticky">
                    <h3>Legal Menu</h3>
                    <nav>
                        <?php

                        $defaults = array(
                        'container' => false,
                        'theme_location' => 'legal-menu',
                        'menu_class' => 'no-bullet'
                        );

                        wp_nav_menu( $defaults );

                        ?>
                    </nav>
                </div><!-- sticky -->

            </aside><!-- sticky-parent -->

        </div><!-- gcw -->
    </div><!--  sph spv  -->

<?php endwhile; else : ?>

    <div class="sph spv-feat"> 
        <p><?php _e( 'Sorry, no pages found.' ); ?></p>
    </div><!--  sph spv-feat  -->


<?php endif; ?>

<?php get_footer(); ?>

