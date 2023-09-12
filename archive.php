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

            <!-- ***************************** -->
            <!-- Archive Header -->
            <!-- ***************************** -->

            <header class="archive-page-header">
                <?php
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="archive-description">', '</div>' );
                ?>
            </header><!-- .page-header -->

            <!-- ***************************** -->
            <!-- END Archive Header -->
            <!-- ***************************** -->
        
            <!-- ***************************** -->
            <!-- Blog Posts -->
            <!-- ***************************** -->

            <div class="blog-archive-grid">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php get_template_part( 'template-parts/blog/blog', 'loop' ); ?>
                <?php endwhile; ?>  
                
            </div><!-- blog-archive-grid -->

            <?php joints_page_navi(); ?>

            <?php else : ?>                     
                <?php get_template_part( 'template-parts/content', 'missing' ); ?>   
            <?php endif; ?>

            <!-- ***************************** -->
            <!-- END Blog Posts -->
            <!-- ***************************** -->

            <div class="spv"><?php get_search_form(); ?></div>

        </div><!-- gcw -->
    </div><!-- sph spt spb-feat -->

</main><!-- #main -->

<?php get_footer(); ?>
