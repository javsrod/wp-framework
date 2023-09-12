<?php
/**
 * Template part for displaying  Basic results in search pages
 * 
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.0
 */
?>
		
<article id="post-<?php the_ID(); ?>" <?php post_class('spb'); ?> role="article">

	<header>
        <h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
    </header>	

    <?php the_excerpt(); ?>
        
</article> <!-- end article -->
