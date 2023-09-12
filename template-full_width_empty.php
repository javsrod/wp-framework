<?php
/**
 * 
 * Template Name: Full Width Empty
 * 
 * Template with no styling or page header template called.
 *
 *
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.0
 */

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1 class="hidden_visually"><?php the_title( ); ?></h1>
    <?php the_content( ); ?>

 <?php endwhile; else : ?>
 
   <p><?php _e( 'Sorry, no pages found.' ); ?></p>
 
 <?php endif; ?>  

<?php get_footer(); ?>
