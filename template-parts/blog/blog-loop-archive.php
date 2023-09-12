<?php
/**
 * The template part for displaying a post article card
 * 
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.0
 */
?>
		
<article id="post-<?php the_ID(); ?>" <?php post_class('article-card'); ?> role="article">
    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium'); ?></a>

    <div class="article-content">
    	<header class="article-header">
            <h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
    		<!-- <?php // get_template_part( 'parts/content', 'byline' ); ?> -->				
    	</header> <!-- end article header -->	

            
            <?php the_excerpt( '<button class="button">' . __( 'Read more...', 'jointswp' ) . '</button>' ); ?>
            <!-- <?php // the_content('<button class="button">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?> -->
                            
        <!-- <footer class="article-footer">
            <p class="tags"><?php // the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
        </footer> --> <!-- end article footer -->
    </div>
</article> <!-- end article -->
