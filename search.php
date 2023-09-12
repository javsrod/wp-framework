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

            <header class="archive-header">
                <div class="container">
                    <h1 class="page-title"><?php
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Search Results for: %s', 'tbcparent' ), '<span>' . get_search_query() . '</span>' );?></h1>

                </div>
            </header><!-- .archive-header -->

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <!-- ***************************** -->
                <!-- Search Posts -->
                <!-- ***************************** -->
                
                <article id="post-<?php the_ID(); ?>" <?php post_class('search-article-card'); ?> role="article">

                    <header>
                        <h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                    </header>   

                    <?php the_excerpt(); ?>
                        
                </article> <!-- end article -->

                <!-- ***************************** -->
                <!-- Search Posts -->
                <!-- ***************************** -->


            <?php endwhile; ?>  

            <?php joints_page_navi(); ?>

            <?php else : ?>     

                <?php get_template_part( 'template-parts/content', 'missing' ); ?>   

            <?php endif; ?>

            
        </div><!-- gcw -->
    </div><!-- spv sph -->

</main><!-- main -->

<?php get_footer(''); ?>
