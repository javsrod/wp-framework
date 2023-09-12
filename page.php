<?php
/**
 *  The Default Page Template
 * 
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.0
 */
?>

<?php get_header(); ?>

    <?php get_template_part('template-parts/page','header'); ?>


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content( ); ?>

    <?php endwhile; else : ?>

        <p><?php _e( 'Sorry, no pages found.' ); ?></p>

    <?php endif; ?>


<?php get_footer('landing'); ?>
