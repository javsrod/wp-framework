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
 * @version 1.0
 */

get_header();
?>

    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="gcw gss--3-1 grid-gap spv legal-page spb-feat">
    
        <div>
            <h1><?php the_title( ); ?></h1>
            <div class="legal-content spt">
                <?php the_content( ); ?>
            </div>
        </div>

        <aside>
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
            
        </aside>


    </div> <!-- gcw #content -->

    <?php endwhile; else : ?>

        <p><?php _e( 'Sorry, no pages found.' ); ?></p>

    <?php endif; ?>

<?php get_footer(); ?>
