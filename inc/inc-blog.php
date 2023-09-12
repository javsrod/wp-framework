<?php   
/**
 *  Modifications to the basic blog and blog posts.
 * 
 * @author JJROD Framework
 * @see https://github.com/javsrod/wp-framework
 * @version 1.1
 */

/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {
    echo '<a href="'.home_url('/news' ).'" rel="nofollow">News</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp&#62;&nbsp;&nbsp;";
        the_category(' &bull; ');
            // if (is_single()) {
            //     echo " &nbsp;&nbsp&#62;&nbsp;&nbsp; ";
            //     the_title();
            // }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp&#62;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp&#62;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

/**************** END ****************
** END Generate breadcrumbs
**************** END ***************/


/**
 *  Related Posts Function, matches posts by tags 
 *  Call using joints_related_posts(); )
 */


function joints_related_posts() {
    global $post;
    $tag_arr = '';
    $tags = wp_get_post_tags( $post->ID );
    if($tags) {
        foreach( $tags as $tag ) {
            $tag_arr .= $tag->slug . ',';
        }
        $args = array(
            'tag' => $tag_arr,
            'numberposts' => 3, /* you can change this to show more */
            'post__not_in' => array($post->ID)
        );
        $related_posts = get_posts( $args );
        if($related_posts) {
        echo __( '<h4>Related Posts</h4>', 'jointswp' );
        echo '<ul class="joints-related-posts">';
            foreach ( $related_posts as $post ) : setup_postdata( $post ); ?>
                <li class="related_post">
                    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    <?php get_template_part( 'parts/content', 'byline' ); ?>
                </li>
            <?php endforeach; }
            }
    wp_reset_postdata();
    echo '</ul>';
} /* end joints related posts function */


/**************** END ****************
** END Related Posts Function
**************** END ***************/
