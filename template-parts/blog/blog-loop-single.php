<?php
/**
 * The template part for displaying the single post content
 * 
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

    <div class="breadcrumb"><?php get_breadcrumb(); ?></div>

    <header class="single-post-header">  
        <div class="flex-vert">
            <h1><?php the_title(); ?></h1>
            <?php get_template_part( 'template-parts/blog/blog', 'byline' ); ?>
        </div>
        <?php the_post_thumbnail( 'full' ); ?>
    </header>

        <div class="single-post-content gcw-s">
            <?php the_content( ); ?>
        </div><!-- single-post-content -->

    <footer class="single-post-content gcw-s spt spb-feat">
        <p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>  
        
        <?php 
        the_post_navigation( array(
        'prev_text' => '&larr; %title',
        'next_text' => '%title &rarr;',
            ) );
        ?>
    </footer><!-- .article-footer -->

    <?php // comments_template(); ?>   
       
</artcile> <!-- gss--3-1  -->
