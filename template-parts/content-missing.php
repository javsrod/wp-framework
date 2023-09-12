<?php
/**
 * The template part for displaying a message that posts cannot be found
 * 
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.0
 */
?>

<div class="post-not-found spv sph text-center">
	
	<?php if ( is_search() ) : ?>
		
		<header class="article-header">
			<h1><?php _e( 'Sorry, we cant seem to find that item', 'jointswp' );?></h1>
		</header>
		
		<section class="entry-content">
			<p><?php _e( 'Please search for another term.', 'jointswp' );?></p>
		</section>
		
		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->
		

		
	<?php else: ?>
	
		<header class="article-header">
			<h1><?php _e( 'sorry there are no results.', 'jointswp' ); ?></h1>
		</header>
		
		<section class="entry-content">
			<p><?php _e( 'Please try another search', 'jointswp' ); ?></p>
		</section>
		
		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->
		
	<?php endif; ?>
	
</div>
