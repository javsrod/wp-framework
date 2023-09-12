<?php
/**
 * The template for displaying search results pages
 *
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.0
 */

get_header(); ?>

<main>
    
    <div class="spv sph">
        <div class="gcw">

            <header class="page-header archive-header">
                <div class="container">
                    <h1 class="page-title"><?php
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Search Results for: %s', 'tbcparent' ), '<span>' . get_search_query() . '</span>' );?></h1>

                </div>
            </header><!-- .page-header -->

            <!-- ***************************** -->
            <!-- Blog Posts -->
            <!-- ***************************** -->

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'search' ); ?>
            <?php endwhile; ?>  

            <?php joints_page_navi(); ?>

            <?php else : ?>                     
                <?php get_template_part( 'template-parts/content', 'missing' ); ?>   
            <?php endif; ?>

            <!-- ***************************** -->
            <!-- Blog Posts -->
            <!-- ***************************** -->

        </div><!-- gcw -->
    </div><!-- spv sph -->

</main><!-- main -->

<?php get_footer(''); ?>
