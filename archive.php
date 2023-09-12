<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.0
 */

get_header();
?>

        
<main>
    <div class="sph spt spb-feat">
        <div class="gcw">

            <header class="page-header">
                <?php
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="archive-description">', '</div>' );
                ?>

                 <?php get_search_form(); ?>
            </header><!-- .page-header -->

            <div class="blog-archive-grid">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php get_template_part( 'template-parts/blog/blog', 'loop-archive' ); ?>
                <?php endwhile; ?>  
        
            </div><!-- container -->
            
            <?php joints_page_navi(); ?>
            
            <?php else : ?>                     
                <?php get_template_part( 'template-parts/content', 'missing' ); ?>   
            <?php endif; ?>


        </div><!-- spv sph -->
    </div><!-- gcw -->

</main><!-- #main -->

<?php get_footer(); ?>
