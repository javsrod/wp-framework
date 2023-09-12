<?php
/**
 * The main blog page template
 * 
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.0
 * 
 */

get_header(); ?>
			
<main class="blog-home">

    <!-- ***************************** -->
    <!-- Blog Header -->
    <!-- ***************************** -->

    <div class="blog-header taft-w btm-shadow-light">
        <div class="gcw">
            <h1 class="mb-0">News</h1> 
        </div>
    </div><!-- .grid-container --> 

    <!-- ***************************** -->
    <!-- END Blog Header -->
    <!-- ***************************** -->

    <!-- ***************************** -->
    <!-- Blog Posts -->
    <!-- ***************************** -->

    <div class="sph spt spb-feat">
        <div class="gcw">
            
            <div class="blog-archive-grid">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php get_template_part( 'template-parts/blog/blog', 'archive' ); ?>
                <?php endwhile; ?>  
                
            </div><!-- blog-archive-grid -->

            <?php joints_page_navi(); ?>

            <?php else : ?>                     
                <?php get_template_part( 'template-parts/content', 'missing' ); ?>   
            <?php endif; ?>

        </div><!-- gcw -->
    </div><!-- sph-edge -->

    <!-- ***************************** -->
    <!-- END Blog Posts -->
    <!-- ***************************** -->

</main><!-- main -->

<?php get_footer(); ?>
