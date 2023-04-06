<?php
/**
 * The template part for displaying a post article
 */
 ?>
		
<article id="post-<?php the_ID(); ?>" <?php post_class('smb-rim'); ?> role="article" c>

	<header class="article-header gss--1-3">
        <div class="">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium'); ?></a>
        </div>
        <div class="flex-vert">
    		<div class="article-header-content"><h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3></div>	
    		<?php get_template_part( 'parts/content', 'byline' ); ?>
        </div>			
	</header> <!-- end article header -->	
					
   <!-- <section class="entry-content" itemprop="text"> -->
        
        <?php // the_excerpt( '<button class="button">' . __( 'Read more...', 'jointswp' ) . '</button>' ); ?>
        <!-- <?php // the_content('<button class="button">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?> -->
    <!-- </section> --> <!-- end article section -->
                        
    <!-- <footer class="article-footer">
        <p class="tags"><?php // the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
    </footer> --> <!-- end article footer -->

</article> <!-- end article -->
