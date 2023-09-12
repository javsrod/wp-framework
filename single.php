<?php
/**
 * Default single post template
 *
 *
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.0
 */

get_header(); ?>

<div class="spv sph">
    <div class="gcw">
        

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/blog/blog', 'loop-single' ); ?>
                
    <?php endwhile; else : ?>

        <p><?php _e( 'Sorry, no courses found.', 'empschool' ); ?></p>

    <?php endif; ?>      


        </div><!-- spv sph -->
</div><!-- gcw -->
    
<?php get_footer(); ?>
